<?php
	@session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>เข้าสู่ระบบ</title>
 
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style type="text/css">
#btn{
	width:100%;
}
 
</style>
</head>
<body>

<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
      เข้าสู่ระบบ</h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="auser"></label>  
  <div class="col-md-4">
  <input id="u_username" name="auser" type="text" placeholder="Username" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="apwd"></label>  
  <div class="col-md-4">
  <input id="u_pass" name="apwd" type="password" placeholder="Password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
	
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">
	  <span class="glyphicon glyphicon-log-in"> </span>  Login</button>
  </div>
</div>
	
	
	

</fieldset>
</form>
	
<?php
if(isset($_POST['Submit'])){
	include("connectdb.php");
	$sql = "select * from users where u_username='".$_POST['auser']."' and u_pass='".($_POST['apwd'])."' limit 1";
	$rs = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($rs);
	
	if ($num == 1){
		$data = mysqli_fetch_array($rs);
		$_SESSION['ses_uid'] = $data['u_id'];
		$_SESSION['ses_uname'] = $data['u_name'];
		echo "<script>";
		echo "window.location='index2.php';";
		echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Username หรือ Password ไม่ถูกต้อง');";
		echo "</script>";
		exit;
	}
}
?>
	
</body>
</html>