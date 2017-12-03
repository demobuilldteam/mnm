<?php 
	session_start();
	if(isset($_GET['id'])){

		$check = false;
		$id = $_GET['id'];
		if(isset($_SESSION['cart'])){
			foreach ($_SESSION['cart'] as $key => $value) {
				if($id == $key){
					$sl = $_SESSION['cart'][$id];
					$_SESSION['cart'][$id] = $sl + 1;
					$check = true;
					break;
				}
			}
		}
		if(!$check){
			$_SESSION['cart'][$id] = 1;
		}
	}
	header("location: info_product.php?id=".$_GET['id']);

?>