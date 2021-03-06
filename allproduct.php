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
				<p>All product</p>
			</div>
			<?php
				include 'menu_left_content.php'
			?>
			<div class="right_content">
				<!-- list new products -->
				<div class="new_product">
					<h4>All products</h4>
					<div class="sort">
						<div class="dropdown">
							<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
							Sort by:
							<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
							<li role="presentation"><a role="menuitem"  href="allproduct.php?sort_code=gia&type=DESC">Price-hight to low</a></li>
							<li role="presentation"><a role="menuitem"  href="allproduct.php?sort_code=gia&type=ASC">Price-low to hight</a></li>
							<li role="presentation"><a role="menuitem"  href="allproduct.php?sort_code=ten&type=DESC">Product name - DESC</a></li>

							<li role="presentation"><a role="menuitem"  href="allproduct.php?sort_code=ten&type=ASC">Prodcut name - ASC</a></li>
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
									$sql = "select * from product order by ten  limit 30";
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
	<div class="back_top"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></div>
	<div class="share_fb">
		<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fmoto-shop.herokuapp.com%2F&layout=button_count&size=large&mobile_iframe=true&appId=220379985135243&width=95&height=28" width="95" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	</div>
	 <?php if(isset($_SESSION['noti_c'])){
	 	// $mes = $_SESSION['noti_c'];
  	echo "<script>alert('You payed successful - Thank you so much!');</script>";
  	unset($_SESSION['noti_c']);
  } ?>
	<script src="js/wethear.js"></script>

	<script>
		function myMap() {
		  var myCenter = new google.maps.LatLng(16.061826, 108.160701);
		  var mapCanvas = document.getElementById("map");
		  var mapOptions = {center: myCenter, zoom: 16};
		  var map = new google.maps.Map(mapCanvas, mapOptions);
		  var marker = new google.maps.Marker({position:myCenter});
		  marker.setMap(map);

		  // Zoom to 9 when clicking on marker
		  google.maps.event.addListener(marker,'click',function() {
		    map.setZoom(16);
		    map.setCenter(marker.getPosition());
		  });
		}
	</script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-PVEwxvxIPSiiHzvGt0isp460L9qH1Ro&callback=myMap"
  type="text/javascript"></script>
</body>
</html>
