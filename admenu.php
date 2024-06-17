 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   <b><a class="navbar-brand" href="#"><p style="color:red"><u>Perfect</u></p><u>match</u></a>
</b>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"> Home <span class="glyphicon glyphicon-home" style="font-size:12px"></span></a>
          <div class="bg-image"></div>
        </li>
      </ul>
<ul class="nav navbar-nav navbar-right">
      
        <?php
        if($_SESSION['email_id']==null){
          ?>
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php"> Sign Up <span class="glyphicon glyphicon-sign-up"></a></a>
        </li>


        <!-- <li style="float:right"><a class="active" href="#about">About</a></li> -->


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">  Sign In <span class="glyphicon glyphicon-log-in"></a>
        </li>
        
          <?php
        }  
       else{
        ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcome.php"> Matches <span class="glyphicon glyphicon-user"> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="search.php"> Search <span class="glyphicon glyphicon-search"> </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="shortlist.php"> Shortlisted <span class="glyphicon glyphicon-heart"> </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php"> Logout <span class="glyphicon glyphicon-log-out"> </a>
        </li>
        
        <?php
       }
       ?>
         
      </ul>
      
    </div>
  </div>
</nav>
