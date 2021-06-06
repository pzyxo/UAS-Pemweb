<?php
if (isset($_COOKIE['email'])){
  header('Location: index.php');
} else {


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
    <style>

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
            
          </ul>
          
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- tampilan activity -->
    <div class='container' style="position: sticky;padding-top: 0;left: 5%;right:5%;text-align:center;width: 90%">
    	<div class='row'>
      <center>
    		<div class="col-lg-8 col-sm-12 col-md-12" style="padding: 2% 5% 5% 5%;">
        
    			<div class='card' style="margin: 5%;border-radius: 50px;border:3px solid white; overflow-x: hidden;background-color: #f8a5c2">
          <img src="img/sign.png" style="width:100%;">
    				<p><h3>Sign Up</h3></p>
    				<center><p>
            <?php
              if(isset($_GET['failed'])){
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Register Failed!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php }
            elseif(isset($_GET['failedid'])) {
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username / Email Already Registered
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>
    				<form method="post" action="signup.php" style="width: 85%;" enctype="multipart/form-data">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingUsername" placeholder="Username" name="username">
                <label for="floatingUsername">Username</label>
              </div>
              <br>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email">
                <label for="floatingEmail">Email</label>
              </div>
              <br>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
              </div>
              <br>
              <div class="row g-3">
                <div class="col">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingFirst" placeholder="First Name" name="namadpn">
                    <label for="floatingFirst">First Name</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingLast" placeholder="Last Name" name="namablkg">
                    <label for="floatingLast">Last Name</label>
                  </div>
                </div>
              </div>
              <br>
                
                <div class="row" style="text-align:left">
                    <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="pria" value="pria">
                          <label class="form-check-label" for="pria">
                            Male
                          </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="wanita" value="wanita">
                          <label class="form-check-label" for="wanita">
                            Female
                          </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Describe yourself" id="floatingTextarea" name="deskripsi" style="resize:none;height:150px"></textarea>
                  <label for="floatingTextarea">Description</label>
                </div>
                <br>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Upload Your Profile Photo</label>
                  <input class="form-control" type="file" id="formFile" name="foto">
                </div>
                <br>
                <p><button type="submit" name="submit" class="btn btn-light button1-pro" >Sign Up</button>
                <p>Already have an account yet? 
                <a href="login.php" class="btn btn-danger btn-sm button1-pro">Sign In</a></p>
                </div>
    				</form>
    			</p></center>
    			</div>
          </center>
    		</div>
    	</div>
    </div>
    <!-- end of tampilan activity -->
    
  </body>
</html>

<?php
}
?>