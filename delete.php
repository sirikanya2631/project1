<meta charset="utf-8">
<?php // ลบข้อมูลในบานข้อมูล
if(isset($_GET['id'])){
	include("connectdb.php");
	$sql = "delete from book WHERE b_id = '".$_GET['id']."' ";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่ได้");
	
    unlink("images/".$_GET['id']."jpg");
	
	
	echo "<script>";
echo "window.location='index.php';";
echo "</script>";
	
}
?>