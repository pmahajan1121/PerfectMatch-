<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'menu.php';?>
<?php
if(isset($_POST["btnview"])){ 
extract($_POST);

mysqli_query($con,"insert into shortlisttable(reg_id,sid)values('".$_SESSION['reg_id']."','".$_GET["id"]."')");

}
?>
<div class="row">
<?php
$q=mysqli_query($con,"select * from regtable where reg_id=".$_GET['id']);
while ($r=mysqli_fetch_array($q)) {
	?>
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<p class="card-text">
    	<form method="post">
		
	
		<img src="<?php echo $r['img1'];?>" height="500px" width="150px" class="card-img-top" alt="Image1"/>
	
		<br>
	
	<style>	
	div.a {
  font-size: 50px;
}
</style>

<p class="card-text">
    	<form method="post">
    	<table class="table">
<tr>
	<td>

  <div class="card-body">
    <b><h5 class="card-title"><?php
	echo $r["uname"];?></h5></b>
</td>
</tr>
   <div class="a"> 
    		<ul>
    			<tR>
    			<th>
    				<li><b>Personal Information</b></li>
    			</th>
    		</tR>
    		<tR><td>
    				<b>Name    : <?php echo $r['uname'];?></b>
    			</td>
    		</tR>
    		
    		<tR>
    			<td>
    				<b>DOB     : <?php echo $r['dob'];?></b>
    			</td>
    		</tR>
    	
    		<tR>
    			<td>
    				<b>Religion: <?php echo $r['religion'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Caste   : <?php echo $r['caste'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Address : <?php echo $r['address'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Country: <?php echo $r['country'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Marital Status: <?php echo $r['marital_status'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<th>
    				<li><b>Physical Attributes</b></li>
    			</th>
    		</tR>
    		<tR>
    			<td>
    				<b>Age     : <?php echo $r['age'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Height  : <?php echo $r['height'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Weight  : <?php echo $r['weight'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Skin Tone: <?php echo $r['skin_tone'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<th>
    				<li><b>Habits</b></li>
    			</th>
    		</tR>
    		<tR>
    			<td>
    				<b>Food   : <?php echo $r['food'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Smooking Habit: <?php echo $r['smooking'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Drinking Habit: <?php echo $r['drinking'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<th>
    				<li><b>Family Profile</b></li>
    			</th>
    		</tR>
    		
    		<tR>
    			<td>
    				<b>Family status: <?php echo $r['family_status'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Family Type  : <?php echo $r['family_type'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Family Values: <?php echo $r['family_values'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<th>
    				<li><b>Educational Details</b></li>
    			</th>
    		</tR>
    		<tR>
    			<td>
    				<b>Degree: <?php echo $r['degree'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>College Name: <?php echo $r['college'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Organisation Name: <?php echo $r['organisation_name'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<th>
    				<li><b>Job Description</b></li>
    			</th>
    		</tR>
    		<tR>
    			<td>
    				<b>Job Role: <?php echo $r['job_rol'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Company Name: <?php echo $r['company_name'];?></b>
    			</td>
    		</tR>
    		<tR>
    			<td>
    				<b>Annual Income: <?php echo $r['annual_income'];?></b>
    			</td>
    		</tR>
    	</ul>
    		<tr>
    			<Td>
    				<input type="submit" name="btnview" value="Shortlist" class="btn btn-success">
    			
    			</Td>
    			<td>
    				<a href="chat.php?id=<?php echo $_GET['id'];?>">
    				<input type="button" name="btnview" value="Chat" class="btn btn-success"></a>

    			</td>
    		</tr>

    	</table>
    </form>


    </p>
    </div>
  </div>
</div>
</div>

<?php
}

?>
<?php require 'footer.php';?>
</body>
</html>