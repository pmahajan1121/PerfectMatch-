
<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>
<style>
body {
  background-image: url('pics4.jpg');
  background-repeat: no-repeat;

  background-size: cover;
}
</style>
  

	
 <?php require 'menu.php';?>
<?php
if(isset($_POST['btnlogin'])){
	extract($_POST);

	$q=mysqli_query($con,"select * from admintbl where aname='$adname' and 
		apassword='$cmbpass'");
	if(mysqli_num_rows($q)>0){
		$_SESSION["aname"]=$adname;
		$q1=mysqli_query($con,"select * from regtable where email_id='".$_SESSION['aname']."'");
		$r1=mysqli_fetch_array($q1);
		
		$_SESSION["login_id"]=$r1["login_id"];
		header("location:welcome.php");
		
	}
	else{
		echo "Invalid Credentials";
	}
}

?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card text-center"  style="background-color:rgba(255,255,255,.5)" >
<form method="post">
	<div class="card-header">Admin Login</div>
  <div class="card-body">
	<table class="table">
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" class="form-control" name="adname" required>
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<form action="/action_page.php">
				<input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="cmbpass" required>
			</form>
			</td>
		</tr>
		
		<tR>
			<Td colspan=2 align=center>
				<input type="submit" class="btn btn-primary" name="btnlogin" value="Sign In">
			</Td>
		</tR>
	</table>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
</div>
</div>
<?php require 'footer.php';?>
</body>
</html>