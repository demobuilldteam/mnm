<?php 
	include ("connect.php");
	if(isset($_GET['gender_id'])){
		$loai = $_GET['gender_id'];

		$qr = "select ten,mota from products where gender_id = $loai limit 3";

		$rs = mysqli_query($conn,$qr);
		while($row = mysqli_fetch_array($rs)){
?>
	<div class="col-md-3 col-xs-12 col-sm-6 item_new">
		<h5><?php echo $row['ten']; ?></h5>
		<div class="image">
			<img src="images/iconmoto.png" class="image_new" alt="" width="150" height="150">
		</div>
		<div class="info_product">
			<p><span>price</span></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quibusdam fugiat tenetur perspiciatis</p>
		</div>
		<div class="button">
			<div class="add_card">
				add to cart
			</div>
			<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
		</div>
	</div>
	<?php 
		}
	}
	?>

