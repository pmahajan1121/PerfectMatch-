
<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'menu.php';?>
<div class="row">

<?php
$q=mysqli_query($con,"select * from shortlisttable,regtable where regtable.reg_id=shortlisttable.sid and shortlisttable.reg_id=".$_SESSION['reg_id']);

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
    			<td>
    				<b>Name: <?php echo $r['uname'];?></b>
    			</td>
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

    			<tr>

	<Td>
		<a href="welcome.php"><input type="button" class="btn btn-success" value="Next" name=""> </a>
	</Td>
</tr>

    		</table>
  	
 </p> 
</div>
</div>
</div>
	
<?php
}

?>


<?php require 'footer.php';?>
</body>
</html>

