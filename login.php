
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

	$q=mysqli_query($con,"select * from regtable where email_id='$txtemail' and password='$cmbpass'");
	if(mysqli_num_rows($q)>0){
		$_SESSION["email_id"]=$txtemail;
		$q1=mysqli_query($con,"select * from regtable where email_id='".$_SESSION['email_id']."'");
		$r1=mysqli_fetch_array($q1);
		$_SESSION["gender"]=$r1['gender'];
		$_SESSION["reg_id"]=$r1['reg_id'];
		
		$_SESSION["login_id"]=$r1["login_id"];
		header("location:welcome.php");
		
	}
	else{
		?>
		<center><p>Invalid Credentials</p></center>
		<?php
	}
}

?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card text-center"  style="background-color:rgba(255,255,255,.5)" >
<form method="post">
	<div class="card-header">Sign In</div>
  <div class="card-body">
	<table class="table">
		<tr>
			<td>
			<h5>	Email</h5>
			</td>
			<td>
				<input type="text" class="form-control" name="txtemail" pattern="[a-z]+[0-9]*@[a-z]+[0-9]*\.[a-z]{2,3}" required>
			</td>
		</tr>
		<tr>
			<td>
				<h5>	Password</h5>
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
		<center><h5><a href="admin.php">Go to Admin Panel</a></h5></center>
			
	
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