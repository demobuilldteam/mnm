<div class="menu_left_content">
	<div class="menu_left_top">
		<!-- 1 -->
		<div class="menu_left_level1">
			<div class="title" loai="ml01">
				<p>Mũ bảo hiểm</p>
			</div>

			<i class="fa fa-angle-double-right fa1" aria-hidden="true"></i>
		</div>
		<ul class="menu_sub sub1">
				<li class="sub_item" ten="dammtrax-ml01">MŨ DAMMTRAX 3/4</li>
				<li class="sub_item" ten="GXT-ml01">Mũ lật hàm GXT</li>
				<li class="sub_item" ten="Andes-ml01">Mũ Andes</li>
				<li class="sub_item" ten="GRS-ml01">Mũ GRS</li>
		</ul>


		<!-- 2 -->
		<div class="menu_left_level1">
			<div class="title" loai="ml10">
				<p>Xe</p>
			</div>
			<i class="fa fa-angle-double-right fa2" aria-hidden="true"></i>
		</div>
		<ul class="menu_sub sub2">
				<li ten="moto-ml10" class="sub_item" id="">MôTô</li>
				<li ten="ga-ml10" class="sub_item" id="">Tay Ga</li>

		</ul>

		<!-- 3 -->
		<div class="menu_left_level1">
			<div class="title">
				<p>Phụ kiện</p>
			</div>

			<i class="fa fa-angle-double-right fa3" aria-hidden="true"></i>
		</div>
		<ul class="menu_sub sub3">
				<li><a href="#" id="">Ốc vít</a></li>
				<li><a href="#" id="">Đèn led</a></li>
				<li><a href="#" id="">HANDLING</a></li>
				<li><a href="#" id="">ENGINE</a></li>
		</ul>
		<!-- 4 -->
		<div class="menu_left_level1">
			<div class="title" loai="ml05">
				<p>Vành xe</p>
			</div>


		</div>
		<!-- 5 -->
		<div class="menu_left_level1">
			<div class="title" loai="ml07">
				<p>Lốp</p>
			</div>


		</div>
		<!-- 6 -->
		<div class="menu_left_level1" >
			<div class="title" loai="ml04">
				<p>Áo khoác</p>
			</div>


		</div>
		<!-- 7 -->
		<div class="menu_left_level1">
			<div class="title" loai="ml06">
				<p>Giày</p>
			</div>


		</div>
		<div class="menu_left_level1">
			<div class="title" loai="ml06">
				<p>Đông cơ</p>
			</div>

		</div>
	</div>
	<div class="menu_left_bottom">
		<h4>specials</h4>
		<?php
			include ("connect.php");

			$qr = "select * from product order by soluong DESC limit 2";
			$rs = mysqli_query($conn,$qr);
			while($row = mysqli_fetch_array($rs)){
		?>
		<div class="item_product">
			<a href="info_product.php?id=<?php echo $row['id']; ?>"><img src="images/<?php echo $row['image']; ?>" alt="" width="100" height="50"></a>
			<div class="item_content">
				<a href="info_product.php?id=<?php echo $row['id']; ?>"><p><?php echo $row['ten'];?></p></a>
				<p><span>
					<?php
						$english_format_number = number_format($row['gia']);
						echo $english_format_number;
						?>
				VND</span></p>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="wethear">
		<h4>Wethear Today</h4>
		<div class="row">
			<div class="form-group">
			    <div class="col-md-6">
			    	<div class="row">
			    		<input id="city" type="text" class="form-control" placeholder="Enter your city's name!">
			    	</div>
			    	<span style="color:red;" id="error_city"></span>
					<div class="row">
						<button type="submit" id="show_wethear"  class="btn btn-primary">View wethear</button>
					</div>
			    </div>
			</div>

			<div class="rowdata col-md-6">

			</div>

		</div>
	</div>
</div>
