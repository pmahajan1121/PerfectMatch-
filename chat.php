


<html>
<head>
  <title></title>
  <?php require 'head.php';?>
</head>
<body>
  <style>
body {
  background-image: url('images/chatt.jpg');
  background-repeat: no-repeat;
 background-attachment: fixed;
  background-size: cover;
}
</style>
  

  <?php
if(isset($_POST['btnregister'])){
  extract($_POST);
  
  mysqli_query($con,"insert into tblchat(msg,reg_id,sid)values('$rbmsg','".$_SESSION['reg_id']."','".$_GET['id']."')");
}
?>
  <?php require 'menu.php';?>
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
    <div class="card text-center">
  <div class="card-header">Chat</div>
  <div class="card-body">

    <p class="card-text"><form method="post">
  <table class="table">

<tr>
    <td>
  <textarea class="form-control" id="textAreaExample1" name="rbmsg" rows="4"></textarea>
  <label class="form-label" for="textAreaExample">Message</label>
</td></tr>
<tr>
  <td>
<button type="sumbit" name="btnregister" class="btn btn-info btn-lg btn-rounded float-end btn-sm">Send</button>
</td>
</tr>

    </table>
</form></p>
<table>
  <tr>
    <td>
      Chat
    </td>
  </tr>
<?php

$q1=mysqli_query($con,"select * from tblchat where sid='".$_GET['id']."' and reg_id='".$_SESSION['reg_id']."'");
while($r=mysqli_fetch_array($q1)){
?>
<tr>
  <td>
<?php 
if($_SESSION['reg_id']==$r['reg_id']){

echo "Sender:".$r['msg'];

}
else{
  echo $r['msg'];
}
?>
</td>
</tr>
<?php
}
?>

</table>
<table>
  <tr>
    <td>
      Chat
    </td>
  </tr>
<?php

$q1=mysqli_query($con,"select * from tblchat where sid='".$_SESSION['reg_id']."' and reg_id='".$_GET['id']."'");
while($r=mysqli_fetch_array($q1)){
?>
<tr>
  <td>
<?php 
if($_SESSION['reg_id']==$r['reg_id']){

echo "Received:".$r['msg'];

}
else{
  echo $r['msg'];
}
?>
</td>
</tr>
<?php
}
?>

</table>

    
  </div>
  
</div>

</div>


    <div class="col-md-3">
  </div>
</div>

<?php require 'footer.php';?>
</body>
</html>
    