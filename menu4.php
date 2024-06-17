<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Matrimonial </a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><span class="glyphicon glyphicon-home"></span>| Home</a>
          <div class="bg-image"></div>
        </li>

        <?php
        if($_SESSION['mob_no']==null){
          ?>
           <li class="nav-item">
          <a class="nav-link" href="register.php">| Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">| Sign In</a>
        </li>
        
          <?php
        }  
       else{
        ?>
        <li class="nav-item">
          <a class="nav-link" href="welcome.php">| Matches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php">| Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shortlist.php">| Shortlisted</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="logout.php">| Logout</a>
        </li>
        <?php
       }
       ?>
         
      </ul>
      
    </div>
  </div>
</nav>
