
<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>


<?php require 'menu.php';?>
<br>
<div class="row">

<?php
$q=mysqli_query($con,"select * from regtable where gender!='".$_SESSION['gender']."'");
while ($r=mysqli_fetch_array($q)) {
	?>

<br>

	<div class="col-md-4">
	<div class="card">
		 <img src="<?php echo $r['img1'];?>" height="400px" width="180px" class="card-img-top" alt="Image1"/>
 
  <div class="card-body">
  <center> <h5 class="card-title"><b> <?php
	echo $r["uname"];?></h5></b></center>
    <br>
   <center> <a href="viewdetails.php?id=<?php echo $r['reg_id'];?>" class="btn btn-danger">View Profile</a></center>
  </div>
</div>
<br>
</div>
<?php
}

?>
<?php require 'footer.php';?>
</body>
</html>