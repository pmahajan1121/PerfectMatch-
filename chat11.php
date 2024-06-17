


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
  
  <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
</td></tr>
<tr>
  <td>
<button type="sumbit" name="btnregister" class="btn btn-light btn-lg btn-rounded float-end">Send</button>
</td>
</tr>

    </table>
</form></p>
<table>
  <tr>
    <td>
      You
    </td>
  </tr>
<?php

$q1=mysqli_query($con,"select * from tblchat where sid='".$_GET['id']."' and reg_id='".$_SESSION['reg_id']."'");
while($r=mysqli_fetch_array($q1)){
?>
<tr>
  <td>
  <div class="d-flex flex-row p-3">
        <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30" height="30">
        <div class="chat ml-2 p-3"></div>
<?php 
if($_SESSION['reg_id']==$r['reg_id']){



echo "Sender:".$r['msg'];

echo $r['msg'];

}
else{
  echo $r['msg'];
}
?>
      </div>

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
  <div class="d-flex flex-row p-3">
        <div class="bg-white mr-2 p-3"><span class="text-muted">
<?php 
if($_SESSION['reg_id']==$r['reg_id']){

echo "Received:".$r['msg'];

}
else{
  echo $r['msg'];
}
?>
</span></div>
        <img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-7.png" width="30" height="30">
      </div> 
      
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
<footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-instagram {
  background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);
  color: white;

}
</style>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright: Priti Mahajan
  
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>
    