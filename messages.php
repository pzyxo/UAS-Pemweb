<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- jquery -->
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui.min.css">
    <script type="text/javascript" src="script/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#tabs').tabs();
        });
    </script>
  <!-- end of jquery -->
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
              <a class="nav-link active" aria-current="page" href="messages.php">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="activity.php">Activity</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
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

    <!-- tampilan messages -->
    <div class="container-fluid">
    <div class="d-flex align-items-start">
      <style>
        .nav-link {
          
          color: black;
        }

        .nav-link:hover {
          color: white;
        }

        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
          background-color:#bb2d3b; 
          border-radius: 15px;
          transition: ease 0.5s;
        }
      </style>
      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="font-size: 2rem;">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
          <div class="row align-items-center">
            <div class="col-4">
                <img src="img/couple1.jpg" width="50px" style="border-radius: 100%;">
            </div>
            <div class="col-8">
                <h1>Lorem</h1>
            </div>
          </div>
        </button>

        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
          <div class="row align-items-center">
            <div class="col-4">
                <img src="img/user1.jpg" width="50px" style="border-radius: 100%;">
            </div>
            <div class="col-8">
                <h1>Ipsum</h1>
            </div>
          </div>
        </button>

        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
          <div class="row align-items-center">
            <div class="col-4">
                <img src="img/user2.jpeg" width="50px" style="border-radius: 100%;">
            </div>
            <div class="col-8">
                <h1>Dolor</h1>
            </div>
          </div>
        </button>

        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
          <div class="row align-items-center">
            <div class="col-4">
                <img src="img/user3.jpeg" width="50px" style="border-radius: 100%;">
            </div>
            <div class="col-8">
                <h1>Amet</h1>
            </div>
          </div>
        </button>
      </div>
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Lorem</div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Ipsum</div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Dolor</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Amet</div>
      </div>
    </div>
    </div>
    
   
    <!-- end of tampilan messages -->
  </body>
</html>