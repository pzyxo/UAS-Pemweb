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
              <a class="nav-link active" aria-current="page" href="activity.php">Activity</a>
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
                <li><button class="dropdown-item red" type="button" href="logout.php">Sign Out</button></li>
              </ul>
            </div>
            
            <?php
          }
          ?>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- tampilan activity -->
    <div class="container-fluid" style="width: 80%;background-color: white;position: sticky; margin-top: 5%;padding:2%;border-radius: 5px;">
      <form class="row g-3 needs-validation" novalidate action="register.php" method="post">
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationCustom01" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Last name</label>
          <input type="text" class="form-control" id="validationCustom02" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Username</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">City</label>
          <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">State</label>
          <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">Zip</label>
          <input type="text" class="form-control" id="validationCustom05" required>
          <div class="invalid-feedback">
            Please provide a valid zip.
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
    </div>
    <!-- end of tampilan activity -->
    
  </body>
</html>

<?php
}
?>