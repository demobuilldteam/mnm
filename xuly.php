<?php 
	include ("connect.php");
	if(isset($_GET['maloais'])){
		$maloai = $_GET['maloais'];

		$qr = "select * from product where maloai='$maloai'";

		$rs = mysqli_query($conn,$qr);
		while($row = mysqli_fetch_array($rs)){
?>
	<div class="col-md-3 col-xs-12 col-sm-6 item_new">
		<h5><?php echo $row['ten']; ?></h5>
		<div class="image">
			<img src="images/<?php echo $row['image']; ?>" class="image_new" alt="" width="150" height="150">
		</div>
		<div class="info_product">
			<p><span>
				<?php 
					$english_format_number = number_format($row['gia']);
					echo $english_format_number; 
					?>
			VND</span></p>
			<p><?php echo $row['mota']; ?></p>
		</div>
		<div class="button">
			<div class="add_card">
				<a href="info_product.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;color: white;">add to cart</a>
			</div>
			<div class="detail"><i class="fa fa-info" aria-hidden="true"></i></div>
		</div>
	</div>
	<?php 
		}
	}
	?>

	<select name="" id="">
		<option value="id_categ">Name category</option>
		<option value=""></option>
		<option value=""></option>
		<option value=""></option>
	</select>

