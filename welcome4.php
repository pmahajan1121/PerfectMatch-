<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'menu.php';?>
<?php require 'menu2.php';?>
<div class="row">



<form method="post">
	<table class="table">
		<Tr>
			<td><h5><b>
				Search By Country
			</b></h5></td>
			<td>
				<select name="txtcoun" class="form-control">
					<option>select</option>
					<?php
						$q=mysqli_query($con,"select distinct country from regtable");
						while ($r=mysqli_fetch_array($q)) {
							?>
							<option value="<?php echo $r['country'];?>"><?php echo $r["country"];?></option>
							<?php
						}
					?>
				</select>
			</td>
			<Td>
				<input type="submit" name="btnsearch" value="Search" class="btn btn-info btn-sm ">
			</Td>
		</Tr>	
		
	</table>
	</form>
<div class="row">
<?php
if(isset($_POST['btnsearch'])){
	extract($_POST);
$q=mysqli_query($con,"select * from regtable where country = '".$txtcoun."' and gender !='".$_SESSION['gender']."'");
}
else{
$q=mysqli_query($con,"select * from regtable where gender!='".$_SESSION['gender']."'");
}
?>
	

<?php
while ($r=mysqli_fetch_array($q)) {
	?>



	<div class="col-md-4">
	<div class="card">
		 <img src="<?php echo $r['img1'];?>" height="400px" width="200px" class="card-img-top" alt="Image1"/>
 
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