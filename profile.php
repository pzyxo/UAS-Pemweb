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

           
            .photoprofile:hover{
              z-index:5;
            }

            .button1-pro {
              transition: ease 0.1s;
            }
            .button1-pro:hover {
              transform: scale(1.1);
              border-radius: 5px;
              z-index: 5;
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
                <li><a class="dropdown-item active" type="button" href="profile.php">Profile</a></li>
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
    <!-- start of profile -->
    <div class="container-fluid" style="color: white; width: 80%; position:sticky; padding-top: 5%; left: 1%;right: 1%;">
      <div class="row justify-item-center">
        <div class="col-lg-3 col-md-12 col-sm-12">
          <center>
            <img src="<?php echo $img; ?>" style="width: 70%; border-radius: 100%;border:2px solid white" class="photoprofile button1-pro">
          </center>
          
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12">
          <div class="row">
            <div class="col">
              <?php
                echo "<h1 style='text-decoration:none'>{$namadepan} {$namablkg}</h1>";
              ?>
            </div>
          </div>
          <div class="dropdown-divider" style="border-top: 2px solid white;"></div>
          <div class="row">
            <div class="col">
              <?php
                echo "<p>{$deskripsi}</p>";
              ?>
            </div>
          </div>
          
        </div>
      </div>
      <center>
        <div class="dropdown-divider" style="border-top: 2px solid white;"></div>
      </center>
      <div class="row">
        <?php if(!isset($_GET['change'])) {?>
        <div class="col">
          <a href="profile.php?change=true" class="btn btn-danger button1-pro">Update Profile</a>
        </div>
        <?php } else { ?>
        <div class="col">
          <a href="profile.php" class="btn btn-danger button1-pro" style="border-radius: 35px 10px 10px 35px">Back</a>
        </div>
        <?php } ?>
        
      </div>
      <br>
      <div class="row">
        <?php if(isset($_GET['change'])){ ?>
      <form action="edit.php" method="post" name="update">
        <table width="25%" border="0" class="table table-danger">
          <tr>
            <td>ID Karyawan</td>
            <td><input type="text" name="id" value="<?php echo $username;?>" class="form-control form-control-sm"></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $namadepan;?>"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $email;?>"></td>
          </tr>	
            <td>Telepon</td>
            <td><input type="text" name="telepon" value="<?php echo $namablkg;?>"></td>
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $deskripsi;?>"></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" id="pria" name="gender" <?php if($gender == 'pria'){?> checked="true" <?php } ?> >Pria
            <input type="radio" id="pria" name="gender" <?php if($gender == 'wanita'){?> checked="true" <?php }?> >Wanita</td>
          </tr>
          <!-- </tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir;?>"></td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>"></td>
          </tr> -->
          <tr>
            <td></td>
            <td><input type="submit" name="update" value="update" class="btn btn-danger"></td>
          </tr>
        </table>
      </form>
      <?php } ?>
    </div> 
    <!-- end of profile -->
    

  </body>
</html>

<?php
}
?>