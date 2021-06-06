<?php
if (!isset($_COOKIE['email'])){
  header('Location: cek.php');
} else {
include('data.php');


?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Soul Match - Find Your Mate Here</title>
  </head>
  <body style="background-color: #f8a5c2;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #f78fb3">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="img/SOULMATCH.png" alt="" width="180px"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="match.php">Match</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="messages.php">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="activity.php">Activity</a>
            </li>
            
          </ul>
          <style>
            .dropdown-item.active {
              background-color:#f78fb3;
            }

            .dropdown-item.red:hover {
              background-color:red;
              color:white;
            }
          </style>
          <?php
          if(!isset($_COOKIE['email'])){
            ?>
            <a href="login.php" class="btn btn-danger d-flex">Sign In</a>
            
            <?php
          } else {
            ?>
            <div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="border-radius:30px;text-decoration:none">
              <img src="<?php echo $img; ?>" style="border-radius:100%;width:25px;text-decoration:none">
                
              </button>
              <ul class="dropdown-menu dropdown-menu-lg-end" style="border-radius:15px"> 
                <li><h5 class="dropdown-item disabled" style="color:black">
                <img src="<?php echo $img; ?>" style="border-radius:100%;width:50px;text-decoration:none">
                <?php
                echo "<strong style='text-decoration:none'>{$_COOKIE['username']}</strong>";
                ?>
                </h5>
                </li>
                <li><a class="dropdown-item" type="button" href="profile.php">Profile</a></li>
                <li><a class="dropdown-item" type="button" href="settings.php">Setting</a></li>
                <center>
                <div class="dropdown-divider" style="border-top: 2px solid black; width: 90%;"></div>
                </center>
                <li><a class="dropdown-item red" type="button" href="logout.php">Sign Out</a></li>
              </ul>
            </div>
            
            <?php
          }
          ?>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- match body -->
    <style>

    .card {
      transition: ease 0.5s;
    }
    .card:hover {
      transform: scale(1.2);
      border-radius: 5px;
      z-index: 5;
    }

    .button1-pro {
      transition: ease 0.1s;
    }
    .button1-pro:hover {
      transform: scale(1.1);
      border-radius: 5px;
      z-index: 5;
    }

    .button2-pro {
      transition: ease 0.1s;
    }
    .button2-pro:hover {
      background-color:#f78fb3 !important;
      transform: scale(1.1);
      border-radius: 5px;
      z-index: 5;
    }

    

    </style>
    <div class="container-fluid" style="position: sticky;padding-top: 3%;">
        <center>
        <div class="row" style="width: 90%;">
            
            
            <?php include('randmatch.php');
            
            while ($row1 = mysqli_fetch_array($result1)){
              $username = (string)($row1['username']);
              $gender = (string)($row1['gender']);
              $namadepan = (string)($row1['nama_depan']);
              $namablkg = (string)($row1['nama_belakang']);
              $deskripsi = (string)($row1['deskripsi']);
              $img = (string)($row1['img']);
            ?>
                <div class="col" style="padding:1%;">
                <div class="card" style="width: 18rem;border-radius: 25px;padding: 5%;box-shadow: 5px 5px 5px #f78fb3;">
                    <center>
                    <img src=<?php echo $img; ?> class="card-img-top" alt="..." style="border-radius: 100%;width: 15rem;border:1px solid white">
                    </center>
                    <div class="card-body">
                      <h3 class="card-title"><?php echo "{$namadepan}"; ?></h3>
                      <div class="row align-items-center">
                          <div class="col-3">
                            <a href="#"><img src="img/love.png" width="50rem" class="button1-pro"></a>
                          </div>
                          <div class="col-3">
                            <a href="#"><img src="img/pm.png" width="50rem" class="button1-pro"></a>
                          </div>
                          <div class="col-6">
                          <?php
                            echo "<a href='profileid.php?id={$username}' class='btn btn-dark button2-pro' style='background-color: #f8a5c2; border: none;'>PROFILE</a>";
                          ?>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <br>
            <?php } ?>
            
        </div>
        <p style="padding-top:2%"><h1 style="color: white;"><strong>FIND YOUR MATCH</strong></h1>
            <a href="match.php" class="btn btn-dark button2-pro" style="background-color: #f78fb3; border: 1px solid white;border-radius:15px">Find more</a></p>
    </center>
    </div>

    <!-- end of match body -->
    
  </body>
</html>

<?php
}
?>