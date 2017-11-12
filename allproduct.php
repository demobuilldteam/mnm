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
	<link rel="stylesheet" href="css/all_product.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/index.js"></script>
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
				<p>all products</p>
			</div>
			<?php
				include 'menu_left_content.php'
			?>
			<div class="right_content">
				<!-- list new products -->
				<div class="new_product">
					<h4>all products</h4>
					<div class="sort">
						<div class="dropdown">
							<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
							Sort by: 
							<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
							<li role="presentation"><a role="menuitem"  href="#">Price-hight to low</a></li>
							<li role="presentation"><a role="menuitem"  href="#">Price-low to hight</a></li>
							<li role="presentation"><a role="menuitem"  href="allproduct.php?sort_code=DESC">Product name - DESC</a></li>
							
							<li role="presentation"><a role="menuitem"  href="allproduct.php?sort_code=ASC">Prodcut name - ASC</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<?php 
							include ("connect.php");
						    if(isset($_GET['sort_code'])){
						    	$sort_code = $_GET['sort_code'];
						    }else{
						    	$sort_code = "DESC";
						    }
							
							$sql = "select * from products where created_at order by ten $sort_code limit 6";
							$result = mysqli_query($conn,$sql);
							while($ro = mysqli_fetch_array($result)){

						?>
						<div class="col-md-3 col-xs-12 col-sm-6 item_new alll ">
							<div class="item_all">
								<div class="image">
									<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
								</div>
								<h5><?php echo $ro['ten']; ?></h5>
								<div class="info_product">
									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
									<p><span>price</span></p>
								</div>
								<div class="button">
									<div class="add_card">
										add to cart
									</div>
									<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
						<?php }?>
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