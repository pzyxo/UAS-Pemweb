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
    <div class="container mt-5" style="color: white; width: 80%; position:sticky;">
      <div class="row justify-item-center">
        <div class="col-lg-3 col-md-12 col-sm-12">
          <center>
            <a href='crop.php' data-bs-toggle="tooltip" data-bs-placement="bottom" title="Clik to change your profile photo"><img src="<?php echo $img; ?>" style="width: 70%; border-radius: 100%;border:2px solid white" class="photoprofile" id='fromleft'></a>
          </center>
          
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12">
          <div class="row">
            <div class="col">
              <?php
                echo "<h1 id='fromright' style='text-decoration:none'>{$namadepan} {$namablkg}</h1>";
              ?>
            </div>
          </div>
          <div id='expand' class="dropdown-divider" style="border-top: 2px solid white;"></div>
          <div class="row">
            <div class="col">
              <?php
                echo "<p id='fromright'>{$deskripsi}</p>";
              ?>
            </div>
          </div>
          
        </div>
      </div>
        <div id='expand' class="dropdown-divider" style="border-top: 2px solid white;"></div>
      <div class="row" id='fromleft'>
        <?php if(!isset($_GET['change'])) {?>
        <div class="col">
          <a href="profile.php?change=true" class="btn btn-danger button1-pro">Update Profile</a>
        </div>
        <?php } else { ?>
        <p class="col">
          <a href="profile.php" class="btn btn-danger button1-pro" style="border-radius: 35px 10px 10px 35px">Back</a>
        </p>
        <?php } ?>
        
      </div>
      <?php if(isset($_GET['change'])){ ?>
      <form action="updatedata.php" method="post" name="updatedata">
      <center>
        <table border="0" class="table table-danger" style='width:fit-content' id='fromright'>
          <tr>
            <td style='width:20%'>Name</td>
            <td style='width:80%'>
            <div class="row">
              <div class="col-6">
                <input type="text" class="form-control" name="namadpn" value="<?php echo $namadepan;?>">
              </div>
              <div class="col-6">
                <input type="text" class="form-control" name="namablkg" value="<?php echo $namablkg;?>">
              </div>
            </div>
            </td>
          </tr>
          <tr>
            <td>Description</td>
            <td><textarea type='text' class='form-control' rows='2' style='resize:none;' name="deskripsi"><?php echo $deskripsi;?></textarea></td>
          </tr>
          <tr>
            <td>Place and Date of Birth</td>
            <td>
            <div class="row" >
              <div class="col">
                <input type="text" class="form-control" name="tempatlhr" value="<?php echo $tempat;?>">
              </div>
              <div class="col">
                <input type="date" class="form-control" name="tgllhr" value="<?php echo $tanggal;?>">
              </div>
            </div>
            </td>
          </tr>
          <tr>
            <td>Address</td>
            <td><textarea type='text' class='form-control' rows='2' style='resize:none;' name="alamat"><?php echo $alamat;?></textarea></td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>
            <select class="form-select" name="religion"  style='width:fit-content' required>
                  <option value="Islam" <?php if($religion == 'Islam'){?> echo "selected"; <?php } ?>>Islam</option>
                  <option value="Kristen" <?php if($religion == 'Kristen'){?> echo "selected"; <?php }?>>Kristen</option>
                  <option value="Katolik" <?php if($religion == 'Katolik'){?> echo "selected"; <?php } ?>>Katolik</option>
                  <option value="Hindu" <?php if($religion == 'Hindu'){?> echo "selected"; <?php }?>>Hindu</option>
                  <option value="Budha" <?php if($religion == 'Budha'){?> echo "selected"; <?php } ?>>Budha</option>
                  <option value="Konghucu" <?php if($religion == 'Konghucu'){?> echo "selected"; <?php }?>>Konghucu</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>
            <select class="form-select" id="floatingSelectGender" name="gender"  style='width:fit-content' required>
                  <option value="Male" <?php if($gender == 'Male'){?> echo "selected"; <?php } ?>>Male</option>
                  <option value="Female" <?php if($gender == 'Female'){?> echo "selected"; <?php }?>>Female</option>
            </select>
            </td>
          </tr>
          </tr>
            <td>Interesting</td>
            <td>
            <div class="row">
              <div class="col col-lg-2 col-md-3 col-sm-3">
                <input type="number" class="form-control" name="min-age" value="<?php echo $min;?>" min="18" max="99">
              </div>
              <div class='col-1'>
              <center><h3> - </h3></center>
              </div>
              <div class="col col-lg-2 col-md-3 col-sm-3">
                <input type="number" class="form-control" name="max-age" value="<?php echo $max;?>" min="18" max="99">
              </div>
            </div>
            </td>
          </tr>
          <tr>
            <td>Job</td>
            <td><input type="text" class="form-control" name="pekerjaan" value="<?php echo $pekerjaan;?>" ></td>
          </tr>
          <tr>
            <td>Hobby</td>
            <td><input type="text" class="form-control" name="hobi" value="<?php echo $hobi;?>" ></td>
          </tr>
          <tr>
            <td>Nation</td>
            <td><input type="text" class="form-control" name="nation" value="<?php echo $nation;?>" ></td>
          </tr>
          <tr>
            <td>Social Media</td>
            <td>
            Instagram
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input type="text" name="ig" class="form-control" value="<?php echo $ig ?>" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            Twitter
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input type="text" name="tw" class="form-control" value="<?php echo $tw ?>" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Update" class="btn btn-danger"></td>
          </tr>
        </table>
        </center>
      </form>
      <?php } else { ?>
        <form name="update">
      <center>
        <table border="0" class="table table-danger mt-3" style='width:fit-content' id='fromright'>
          <tr>
            <td style='width:40%'>Full Name</td>
            <td style='width:70%'>
                <input type="text" class="form-control" name="namadpn" value="<?php echo "{$namadepan} {$namablkg}";?>"disabled style='background-color:white;max-width:100%'>
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" class="form-control" value="<?php echo $email;?>" disabled style='background-color:white;max-width:100%'></td>
          </tr>
          <tr>
            <td>Place and Date of Birth</td>
            <td>
            <div class="row" >
              <div class="col">
                <input type="text" class="form-control" name="tempatlhr" value="<?php echo "{$tempat}, {$tanggal}";?>" disabled style='background-color:white;max-width:fit-content'>
              </div>
            </div>
            </td>
          </tr>
          <tr>
            <td>Address</td>
            <td><textarea type='text' class='form-control' rows='2' name="alamat" disabled style='resize:none;background-color:white;text-align:left;max-width:100%'><?php echo $alamat;?></textarea></td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>
            <input class="form-control" value="<?php echo $religion;?>" disabled style='background-color:white;text-align:center;max-width:fit-content'>
            </td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>
              <input class="form-control" value="<?php echo $gender;?>" disabled style='background-color:white;text-align:center;max-width:fit-content'>
            </td>
          </tr>
          </tr>
            <td>Interesting With</td>
            <td>
            <div class="row">
              <div class="col col-lg-2 col-md-3 col-sm-3">
                <input class="form-control" name="min-age" value="<?php echo $min;?>" disabled style='background-color:white;text-align:center'>
              </div>
              <div class='col-1'>
              <center><h3> - </h3></center>
              </div>
              <div class="col col-lg-2 col-md-3 col-sm-3">
                <input class="form-control" name="max-age" value="<?php echo $max;?>"disabled style='background-color:white;text-align:center'>
              </div>
            </div>
            </td>
          </tr>
          <tr>
            <td>Job</td>
            <td><input type="text" class="form-control" name="pekerjaan" value="<?php echo $pekerjaan;?>" disabled style='background-color:white;max-width:100%'></td>
          </tr>
          <tr>
            <td>Hobby</td>
            <td><input type="text" class="form-control" name="hobi" value="<?php echo $hobi;?>" disabled style='background-color:white;max-width:100%'></td>
          </tr>
          <tr>
            <td>Nation</td>
            <td><input type="text" class="form-control" name="nation" value="<?php echo $nation;?>" disabled style='background-color:white;max-width:100%' ></td>
          </tr>
          <tr>
            <td>Social Media</td>
            <td>
            <?php if($ig != "-"){ ?> 
            <p><a href="http://instagram.com/<?php echo $ig ?>/"><img src='img/ig.png' style='width:40px' class='button1-pro'></a>
            <?php echo $ig; } ?></p>
            <?php if($tw != "-"){ ?> 
            <p><a href="http://twiiter.com/<?php echo $tw ?>/"><img src='img/twt.png' style='width:40px' class='button1-pro'></a>
            <?php echo $tw; }?></p>
            </td>
          </tr>
        </table>
        </center>
      </form>
      <?php } ?>
    </div> 
    <!-- end of profile -->
    

  </body>
</html>

<?php
}
?>