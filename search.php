<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'menu.php';?>
<?php require 'menu2.php';?>
<br>
<div class="row">




<div class="row">
	

<?php
$q=mysqli_query($con,"select * from regtable where gender!='".$_SESSION['gender']."'");
while ($r=mysqli_fetch_array($q)) {
	?>



	<div class="col-md-4">
	<div class="card">
		 <img src="<?php echo $r['img1'];?>" height="500px" width="200px" class="card-img-top" alt="Image1"/>
 
  <div class="card-body">
    <h5 class="card-title"><?php
	echo $r["uname"];?></h5>
    <p class="card-text">
    	<table class="table">
    		<tR>
    			<th>
    				<b>Name: <?php echo $r['uname'];?></b>
    			</th>
    		</tR>
    		
    		<tR>
    			<td>
    				<b>DOB: <?php echo $r['dob'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Religion: <?php echo $r['religion'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Caste: <?php echo $r['caste'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Address: <?php echo $r['country'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Education: <?php echo $r['degree'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Profession: <?php echo $r['job_rol'];?></b>
    			</td>
    		</tR>
    		
    		
    		
    	</table>


    </p>
    <a href="viewdetails.php?id=<?php echo $r['reg_id'];?>" class="btn btn-primary">View Details</a>
  </div>
</div>
</div>
<?php
}

?>
<?php require 'footer.php';?>
</body>
</html>