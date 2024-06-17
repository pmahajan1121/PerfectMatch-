<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'menu.php';?>
<input type="button" onclick="print()" name="" value="Print"><br>
Total No. Of Users=
<?php
$q=mysqli_query($con,"select count(*) as totaluser shortlisttable");
$r=mysqli_fetch_array($q);
echo $r['totaluser'];
?>


<table class="table">
	<tr>
		<td>User</td>
		<td>Shortlisted Partner</td>
		
	</tr>


<?php
$q=mysqli_query($con,"select uname from shortlisttable,regtable where regtable.reg_id=shortlisttable.reg_id");
$q1=mysqli_query($con,"select uname from shortlisttable,regtable where regtable.reg_id=shortlisttable.sid");

while ($r=mysqli_fetch_array($q,$q1)) {


	?>

	<Tr>
		<td>
	<?php echo $r["uname"];?>
</td>
<td>
	<?php echo $r["uname"];?>
</td>

</Tr>


<?php
}

?>

</table>
<?php require 'footer.php';?>
</body>
</html>