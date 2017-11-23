<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SHOP MOTORCYCLES</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/index.js"></script>
	<script>
			$(document).ready(function($) {
				$('.title').click(function(event) {
					var maloai = $(this).attr('loai');
					// alert(gender);
					$.get("xuly.php",{maloais: maloai},function(data){
						$('.add_p').html(data);
						// alert(data);
					});
				});
				$('.sub_item').click(function(event) {
					var conditions = $(this).attr('ten');

					var arr = conditions.split('-');
					var kieu = arr[0];
					var loai = arr[1];
					// alert(kieu+loai);
					$.get("xulyloai.php",{kieux: kieu,loaix: loai},function(data){
						// alert(data);
						$('.add_p').html(data);
					});

				});
			});
	</script>
</head>
<body>
	<!-- head -->
	<?php include 'head.php' ?>
	<!-- content -->
	<div class="content">
		<div class="container">
			<!-- left content -->
			<div class="link">
				<a href="index.php"><i class="fa fa-home" aria-hidden="true">/ </i></a>
				<p>Info Product</p>
			</div>
			<div class="infor_product">
				<div class="row">
					<?php 
						include ("connect.php");
					    $sort_code = "";
						if(isset($_GET['id'])){
							$id = $_GET['id'];
							$sql = "select * from product where id= $id";
						}
						$result = mysqli_query($conn,$sql);
						while($ro = mysqli_fetch_array($result)){

					?>
						<div class="col-md-4 col-xs-12 col-sm-4">
							
							<div class="imageinfo">
								<img src="images/<?php echo $ro['image']; ?>"  alt="" width="250" height="300">
							</div>
						</div>
						<div class="col-md-8 col-xs-12 col-sm-8 infop">
							<h5><?php echo $ro['ten']; ?></h5>
							<p id="mota_infor"><?php echo $ro['mota']; ?></p>
							<p><span style="font-size: 18px;color: #dada13;font-weight: bold;">
								<?php 
									$english_format_number = number_format($ro['gia']);
									echo $english_format_number; 
									?>
							VND</span></p>
							<div class="button" style="width: 50%;">
								<div class="add_card">
									<a href="info_product.php?id=<?php echo $ro['id']; ?>" style="text-decoration: none;color: white;">add to cart</a>
								</div>
							</div>
						</div>
					<?php 
						}
					 ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		include 'foot.php'
	?>
	
</body>
</html>