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
	<!-- head -->
	<?php include 'head.php' ?>
	<!-- content -->
	<div class="content">
		<div class="container">
			<!-- left content -->
			<div class="link">
				<a href="index.php"><i class="fa fa-home" aria-hidden="true">/ </i></a>
				<p>Your Cart</p>
			</div>
			<?php 
				include ("connect.php");
				if(!isset($_SESSION['cart'])){ ?>
						<p style="color: blue;font-size: 20px;">Your cart is empty! You can buy anything you need about motocyles!</p>
				<?php }
				else {if(count($_SESSION['cart'])<1) {?>
			<p style="color: blue;font-size: 20px;">Your cart is empty! You can buy anything you need about motocyles!</p>
			<?php }else{ 
				$listid = "";
				foreach ($_SESSION['cart'] as $key => $value) {
					$listid.="'".$key."' ,";
				}
				$listid = trim($listid,",");
				// echo $listid;
				$qr = "select * from product where id in ($listid)";
				$rs = mysqli_query($conn,$qr);
				

				// unset($_SESSION['cart']);
			?>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>STT</th>
							<th>Hình ảnh</th>
							<th>Tên sản phẩm</th>
							<th>Giá</th>
							<th>Số Lượng</th>
							<th>Tổng tiền</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$i = 1;
						$tongtien = 0;
						while($row = mysqli_fetch_array($rs)){ 
							$id = $row['id'];
							$price = number_format($row['gia']);
							$sl = $_SESSION['cart'][$id];
					?>
						<tr>
							<td><?php echo $i ?></td>
							<td><img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['ten']; ?>" width=100 height=110></td>
							<td><?php echo $row['ten']; ?></td>
							<td><?php echo $price; ?></td>
							<form action="editcart.php" method="get">
								<td><input style="width: 60px;" type="number" min="1" name="soluong" height="40" value="<?php echo $sl; ?>">
									<input type="hidden" name="id" value="<?php echo $id; ?>">
								</td>
								<td><?php echo number_format($row['gia']*$sl); ?></td>
								<td> 
									<button style="border: none;background:none;color: blue;" type="submit" name="submit" value="submit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> 
									<a style="margin-left: 4%;" href="deletecart.php?id=<?php echo $id ?>"><i style="color: red;height: 15px;" class="fa fa-times" aria-hidden="true"></i></a>
								</td>
							</form>
              
						</tr>
					<?php $i += 1;
								$tongtien += ($row['gia'] * $sl);
								$_SESSION['tongtien'] = $tongtien;
					} ?>
					</tbody>

				</table>
			</div>
			<?php }} ?>
			<?php if(isset($tongtien)){ ?>
			<div class="row">
				<div class="col-md-4 col-md-offset-8 donhang">
					<h4>Thông tin đơn hàng</h4>
					<p>Thành tiền: <span style="color: #f7f716;font-weight: bold;"><?php echo number_format($tongtien); ?> VNĐ</span></p>
					<p>Phí giao dịch dịch vụ: <span style="color: #f7f716;font-weight: bold;"> VNĐ	</span></p>
					<p><span style="color: black;font-weight: bold;">Tổng tiền: <span style="color: #f7f716;font-weight: bold;"> <?php echo number_format($tongtien); ?> VNĐ</span></span></p>
					<div class="col-md-4">
						<div class="deletacart"><a style="color:black;" href="clearcart.php" style="text-align: center;">Hủy giỏ hàng</a></div>
					</div>
					<div class="col-md-8">
						<div class="thanhtoan"><a href="thanhtoan.php" style="text-align: center;">Thanh toán</a></div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<?php
		include 'foot.php'
	?>
	
</body>
</html>