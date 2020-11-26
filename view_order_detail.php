<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>รายละเอียดใบสั่งซื้อ</title>
</head>
	

<body>
<h1><center>รายละเอียดใบสั่งซื้อ <br>เลขที่<?=$_GET['a'];?></center></h1>
	<a><h3 align = 'center'><img src="design/combiz.jpg" width="200" >
		
	</a></h3>

	
	

	<?php
	include("connectdb.php");
	$sql = "SELECT  *  FROM  users
INNER JOIN orders ON users.u_id = orders.u_id
WHERE orders.o_id = '".$_GET['a']."'  ";
	$rs = mysqli_query($conn, $sql) ;
        while ($data = mysqli_fetch_array($rs)) {
			?>
	<h2>ชื่อลูกค้า :<?=$data['u_name'];?></h2>
	<h2>คณะ :<?=$data['u_edu'];?></h2>
  <h2>สาขา :<?=$data['u_major'];?></h2>
	<h2>เบอร์ติดต่อ :<?=$data['u_phone'];?></h2>
	<?php } ?><br>
	
			
		
<table width="863" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="54">ที่</td>
    <td width="318">สินค้า</td>
    <td width="318">รายละเอียดสินค้าสินค้า</td>

    <td width="141">จำนวน</td>
    <td width="149">ราคา/ชิ้น</td>
    <td width="173">รวม</td>
  </tr>

  <?php
	include("connectdb.php");
	$sql = "SELECT  *  FROM  orders_detail
INNER JOIN products ON orders_detail.p_id = products.p_id
WHERE orders_detail.o_id = '".$_GET['a']."'  ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs)) {
		$i++;
		$sum = $data['p_price'] * $data['quantity'] ;
		@$total += $sum;
?>
	
  <tr>
    <td><?=$i;?></td>
    <td><img src="images/<?=$data['p_picture'];?>" width="80"> <br>
	<?=$data['p_id'];?> : <?=$data['p_name'];?></td> 
   <td> <?=$data['p_id'];?> : <?=$data['p_detail'];?></td>
  
    <td><?=$data['quantity'];?></td>
    <td><?=number_format($data['p_price'],0);?></td>
    <td><?=number_format($sum,0);?></td>
  </tr>
 <?php } ?>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  
    <td>รวมทั้งสิ้น</td>
    <td><?=number_format($total,0);?></td>
  </tr>
</table>
</body>
</html>