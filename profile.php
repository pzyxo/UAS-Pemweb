<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Soul Match - Find Your Mate Here</title>
  </head>
  <body style="background-color: #f8a5c2;overflow-x: hidden;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #f78fb3">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="img/SOULMATCH.png" alt="" width="180px"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="match.php">Match</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="messages.php">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="activity.php">Activity</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
            </li>
            
          </ul>
          <?php
          if(!isset($_COOKIE['nama'])){
            ?>
            <a href="login.html" class="btn btn-danger d-flex">Sign In</a>
            
            <?php
          } else {
            ?>
            <div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="border-radius:30px;text-decoration:none">
              <img src="img/user1.jpg" style="border-radius:100%;width:25px;text-decoration:none">
                
              </button>
              <ul class="dropdown-menu dropdown-menu-lg-end" style="border-radius:15px"> 
                <li><h5 class="dropdown-item disabled" style="color:black">
                <img src="img/user1.jpg" style="border-radius:100%;width:50px;text-decoration:none">
                <?php
                echo "<strong style='text-decoration:none'>{$_COOKIE['nama']}</strong>";
                ?>
                </h5>
                </li>
                <li><button class="dropdown-item" type="button" href="profile.php">Profile</button></li>
                <li><button class="dropdown-item" type="button" href="settings.php">Setting</button></li>
                <center>
                <div class="dropdown-divider" style="border-top: 2px solid black; width: 90%;"></div>
                </center>
                <li><button class="dropdown-item" type="button" href="logout.php">Sign Out</button></li>
              </ul>
            </div>
            
            <?php
          }
          ?>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- start of profile -->
    <div class="container-fluid" style="color: white; width: 80%; position:sticky; padding-top: 5%; left: 1%;right: 1%;">
      <div class="row justify-item-center">
        <div class="col-lg-3 col-md-12 col-sm-12">
          <center>
            <img src="img/user1.jpg" style="width: 70%; border-radius: 100%;border:2px solid white">
          </center>
          
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12">
          <div class="row">
            <div class="col">
              <h1>Lorem Ipsum</h1>
            </div>
          </div>
          <div class="dropdown-divider" style="border-top: 2px solid white;"></div>
          <div class="row">
            <div class="col">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet, magna vitae sagittis venenatis, purus tortor suscipit orci, at tempus mauris eros ac nisi. Morbi imperdiet blandit magna at ultricies. Phasellus ex metus, egestas a sapien vel, pharetra pulvinar augue. Duis dapibus tortor urna, ut consectetur felis rutrum sit amet. Nulla id pellentesque nisi.</p>
            </div>
          </div>
          
        </div>
      </div>
      <center>
        <div class="dropdown-divider" style="border-top: 2px solid white;"></div>
      </center>
      <div class="row">
        <div class="col">
          <a href="register.html" class="btn btn-danger">Update Profile</a>
        </div>
      </div>
    </div> 
    <!-- end of profile -->

  </body>
</html>