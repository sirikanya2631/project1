<meta charset="utf-8">
<?php
	$host = "localhost" ;
	$user = "root" ;
	$pwd = "" ;
	$db = "bizcompclub" ;
	
	$conn = mysqli_connect($host, $user, $pwd) or die("เชื่อต่อฐานข้อมูลไม่ได้") ;
	mysqli_select_db($conn, $db) or die("เลือกฐานข้อมูลไม่ได้");
	mysqli_query($conn,"SET NAMES utf8") ;


?>