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
				<p>new product</p>
			</div>
			<?php
				include 'menu_left_content.php'
			?>
			<div class="right_content">
				<!-- list new products -->
				<div class="new_product">
					<h4>new products</h4>
					<div class="sort">
						<div class="dropdown">
							<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
							Sort by: 
							<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
							<li role="presentation"><a role="menuitem"  href="newproduct.php?sort_code=gia&type=DESC">Price-hight to low</a></li>
							<li role="presentation"><a role="menuitem"  href="newproduct.php?sort_code=gia&type=ASC">Price-low to hight</a></li>
							<li role="presentation"><a role="menuitem"  href="newproduct.php?sort_code=ten&type=DESC">Product name - DESC</a></li>
							
							<li role="presentation"><a role="menuitem"  href="newproduct.php?sort_code=ten&type=ASC">Prodcut name - ASC</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="add_p">
							<?php 
								include ("connect.php");
							    $sort_code = "";
								if(isset($_GET['sort_code'])){
									$sort_code = $_GET['sort_code'];
									$type = $_GET['type'];
									$sql = "select * from product where created order by created DESC,$sort_code $type limit 20";
								}else{
									$sql = "select * from product order by created DESC,ten ASC limit 20";
								}
								$result = mysqli_query($conn,$sql);
								while($ro = mysqli_fetch_array($result)){

							?>
								<div class="col-md-3 col-xs-12 col-sm-6 item_new">
									
									<div class="image">
										<img src="images/<?php echo $ro['image']; ?>" class="image_new" alt="" width="150" height="150">
									</div>
									<h5><?php echo $ro['ten']; ?></h5>
									<div class="info_product">
										
										<p class="mota"><?php echo $ro['mota']; ?></p>
										<p><span>
											<?php 
												$english_format_number = number_format($ro['gia']);
												echo $english_format_number; 
												?>
										VND</span></p>
									</div>
									<div class="button">
										<div class="add_card">
											<a href="info_product.php?id=<?php echo $ro['id']; ?>" style="text-decoration: none;color: white;">add to cart</a>
										</div>
										<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
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
	</div>
	<?php
		include 'foot.php'
	?>
	
</body>
</html>