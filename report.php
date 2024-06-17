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
$q=mysqli_query($con,"select count(*) as totaluser from regtable");
$r=mysqli_fetch_array($q);
echo $r['totaluser'];
?>


<table class="table">
	<tr>
		<td>Name</td>
		<td>Address</td>
		<td>Email</td>
		<td>Phone</td>
	</tr>


<?php
$q=mysqli_query($con,"select * from regtable");
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<td>
	<?php echo $r["uname"];?>
</td>
<td>
	<?php echo $r["address"];?>
</td>
<td>
	<?php echo $r["email_id"];?>
</td>
<td>
	<?php echo $r["mob_no"];?>
</td>
</Tr>
<?php
}

?>

</table>
<?php require 'footer.php';?>
</body>
</html>