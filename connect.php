<?php
	$username = "root";
	$password = "vovanquang";
	$severname = "localhost";
	$dbname = "giuaki_development";
	$conn = mysqli_connect($severname,$username,$password,$dbname);
	mysqli_set_charset($conn, 'utf8');
	if(! $conn){
		die("không thể kết nối..".mysqli_connect_error());
	}
	// else{
		// echo "kết nối thành công..";
	// }
?>
