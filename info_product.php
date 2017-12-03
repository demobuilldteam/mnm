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
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=220379985135243';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
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
								$_SESSION['maloai'] = $ro['maloai'];
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
							<!-- <p>Số lượng: <?php echo $ro['soluong']; ?></p> -->
							<p>Kiễu: <?php echo $ro['kieu']; ?></p>
							<div class="button" style="width: 50%;">
								<div class="add_card">
									<a href="addcart.php?id=<?php echo $ro['id']; ?>" style="text-decoration: none;color: white;">add to cart</a>
								</div>
							</div>
						</div>
					<?php 
						}
					 ?>
						
					</div>
					<!-- commet fb-->
					<div class="row">
						<div class="col-md-8 col-md-offset-4">
							<div class="fb-comments" data-href="http://localhost/mnm/info_product.php" data-numposts="8"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="suggest">
					<div class="row">
						<?php if(isset($_SESSION['maloai'])){?>
						<h4>That's is suggest for you</h4>
						<?php 
							$maloai = $_SESSION['maloai'];
							$qr = "select * from product where maloai='$maloai' limit 7";
							$rs = mysqli_query($conn,$qr);
							while($ro = mysqli_fetch_array($rs)){
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

					<?php }} ?>
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