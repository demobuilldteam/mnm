<?php
	$username = "sql12207584";
	$password = "KzyYpsTKu2";
	$servername ="sql12.freemysqlhosting.net";

	$dbname = "sql12207584";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	mysqli_set_charset($conn, 'utf8');
	if(!$conn){
		die("không thể kết nối..".mysqli_connect_error());
	}
	// else{
		// echo "kết nối thành công..";
	// }
?>
