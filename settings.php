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
    <style>
          #card:hover{
            background-color:pink;
            color:white;
            border: 1px solid white !important;
          }
          #fromtop {
          position: relative;
          animation: fromtop 1s;
          }
          @keyframes fromtop {
          from {
            top: -200%;
          }
          to {
            top:0%;
          }
        }

        .kolom-desk {
          text-align: center;
          width:50%;
        }

        #fromleft {
            position: relative;
            display:block;
            animation: fromleft 1.5s;
        }
        @keyframes fromleft {
            from {
                left:-100%;
            }
            to {
                left:0;
            }
        }
        
        #fromright {
            position: relative;
            animation: fromright 1.5s;
        }
        @keyframes fromright {
            from {
                right:-100%;
            }
            to {
                right:0;
            }
        }

        #frombottom {
            position: relative;
            display:block;
            animation: frombottom 1.5s;
        }
        @keyframes frombottom {
            from {
                bottom:-100%;
            }
            to {
                bottom:0;
            }
        }
        
        #expand {
            position: relative;
            width:100%;
            animation: expand 1.5s;
        }
        @keyframes expand {
            from {
              width:0;
            }
            to {
              width:100%;
            }
        }
      </style>
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
                <li><a class="dropdown-item active" type="button" href="settings.php">Setting</a></li>
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
    <!-- tampilan settings -->
    <div class="container mt-4 mb-4 p-4">
    <h1 id='fromright' style='color:white'><center>Settings</center></h1>
    <div class='card' id='fromleft' style='padding:5%'>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Account protection</h5><hr>
          <p class="card-text" style='font-size:1.1rem'>To protect your account, you can change your password</p>
          <!-- Button trigger modal -->
          <p>
          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Change password
          </button></p>
          <?php
              if(isset($_GET['false'])){
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Incorrect Password
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php }
            elseif(isset($_GET['true'])) {
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                Password successfully changed
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Change Account's Password</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="change.php">
                <div class="modal-body">
                  
                  <div class="form-floating">
                    <input type="password" class="form-control form-sm" id="floatingPassword" placeholder="Password" name="oldpassword" required>
                    <label for="floatingPassword">Your Current Password</label>
                    <div class="invalid-feedback">
                      Please choose a password.
                    </div>
                  </div>
                  <br>
                  <div class="form-floating">
                    <input type="password" class="form-control form-sm" id="floatingPassword" placeholder="Password" name="newpassword" required>
                    <label for="floatingPassword">Your New Password</label>
                    <div class="invalid-feedback">
                      Please choose a password.
                    </div>
                  </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input type="submit" name="submit" id="submit" value="Update" class="btn btn-danger">
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Help & Support</h5><hr>
          <p class="card-text">If you have any problem, you can ask us anytime</p>
          <p><a href="help.php" class="btn btn-primary btn-sm">Help</a></p>
          
          <p><button class="btn btn-danger btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Support
          </button>
          </p>
          <?php
              if(isset($_GET['failed'])){
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Please check your message again
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <form method="POST" action="cust.php">
                <p class="form-floating">
                  <textarea class="form-control" placeholder="Support" id="floatingTextarea" name="support" style="resize:none;height:100px" required></textarea>
                  <label for="floatingTextarea">Support</label>
                  <div class="invalid-feedback">
                    Write your problems here
                  </div>
                </p>
                <div align='right'>
                <input type="submit" id='submit' name="submit" class="btn btn-danger btn-sm" >
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
      <hr>
        <div class="card">
        <div class="card-body">
          <h5 class="card-title">Want to support this website?</h5><hr>
          <p class="card-text">You can donate us :) choose the payment below</p>
          <p><p>
              <button class="btn btn-dark btn-md" style='background-color:#0d6efd;border:#0d6efd' type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Dana</button>
              <button class="btn btn-dark btn-md" style='background-color:green;border:green' type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Gopay</button>
              <button class="btn btn-dark btn-md" style='background-color:purple;border:purple' type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Ovo</button>
              <button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Show/Hide All</button>
            </p>
            <div class="row">
              <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                  <div class="card card-body">
                  <center>
                    <img src='img/donate/dana.jpeg' style='width:150px'>
                  </center>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                  <div class="card card-body">
                  <center>
                    <img src='img/donate/gopay.jpeg' style='width:150px'> 
                  </center>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                  <div class="card card-body">
                  <center>
                    <img src='img/donate/ovo.jpeg' style='width:150px'>
                  </center>   
                  </div>
                </div>
              </div>
            </div>
          </p>
        </div>
        </div>
    </div>
    </div>
    <!-- end of tampilan settings -->
    <!-- footer -->
    <footer class="page-footer">
        <center>
          
        <div class="footer-copyright text-center bg-light">© 2021 Copyright: pz-team</div>
        </center>
      </footer>
      <!-- end of footer -->
  </body>
</html>

<?php
}
?>