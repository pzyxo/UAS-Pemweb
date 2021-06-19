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

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    <title>Soul Match - Find Your Mate Here</title>
  </head>
  <script>
    setInterval(function() { $("#messages").load("chatread.php?id=<?php echo $_GET['id'];?>#latest"); }, 500);
  </script>
  <!-- <script>
    setInterval(function() { $("#listchat").load("chatlist.php"); }, 500);
  </script> -->
  
  <style>
    .nav-link {
      transition: ease 0.2s;
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

    #isichat {
      box-shadow: 3px 3px 2px grey;
      border-radius:10px;
    }

    .dropdown-item.active {
      background-color:#f78fb3;
    }

    .dropdown-item.red:hover {
      background-color:red;
      color:white;
    }
    #card-list {
      transition: ease 0.1s;
    }
    #card-list:hover {
      transform: scale(1.025);
      z-index: 5;
    }

    @media screen and (max-width: 1080px) {
      #isichat {
        height: 800px !important; /* The width is 100%, when the viewport is 800px or smaller */
      }

      #messages {
        height: 600px !important;
      }

      .listchat {
        height: 680px !important;
      }
    }
    @media screen and (max-width: 480px) {
      #isichat {
        height: 680px !important; /* The width is 100%, when the viewport is 800px or smaller */
      }

      #messages {
        height: 480px !important;
      }
      .listchat {
        height: 480px !important;
      }
    }
    </style>
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
            
          </ul>
          
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

    <!-- tampilan messages -->
    <div class="container-fluid pt-3" style='width:100%'>
      <div class="row justify-content-center">
      

<!-- badan pesan -->
<?php if(isset($_GET['id'])){ ?>
        <div class="col col-lg-8 col-md-8 col-sm-12 ">
        
        <div class='card' style='height:680px;width:100%;padding:2%;background-color:pink' id='isichat' >
        <div class="card" style="width: 100%;padding: 0%;" id="tampil">
          <?php include('dataprofile.php') ?>
            
            <div class="card-body">
            <div class="row">
            <div class='col-2'>
            <a href='match.php' class="btn btn-danger">Back</a>
            </div>
            <div class='col-10'>
              <div align='right'>
                <?php echo "<h3 > {$namadepanp} {$namablkgp} </h3>"; ?>
                <a href='profileid.php?id=<?php echo $usernamep ?>'><img src=<?php echo $imgp; ?> class='img-card-top' alt="..." style="border-radius: 100%;width: 10%;border:1px solid white"></a>
              </div>
            </div>
            </div>
        </div>
          <div class='card card-messages' style='height:380px;overflow:auto;padding:2%;word-wrap: break-word;transform: rotate(180deg)' id='messages'>
            
            <!-- tempat chat -->
            
          </div>
          <form method="post" class='row justify-content-center pt-2'>
            <div class='col-auto' style='width:80%'>
              <textarea type='text' name='isichat' class='form-control' rows='3' style='resize:none'></textarea>
            </div>
            <div class='col-auto'>
              <button type='submit' name='send' class='btn btn-danger' >Send</button>
            </div>
          </form>
          <?php
          // mengupdate database dengan chat baru
          if(isset($_POST['send'])){
            include('dbconfig.php');
            $receiver = (string)($_GET['id']);
            $isichat = (string)($_POST['isichat']);
            $querychat = "select * from chat where from_user ='".$_COOKIE['username']."' and to_user = '{$receiver}' or from_user = '".$receiver."' and to_user = '{$_COOKIE['username']}' ORDER BY time DESC limit 30";
            $resultchat = mysqli_query($connect,$querychat);
            $count = mysqli_num_rows($resultchat);
            $i = $count;
            while($rowchat = mysqli_fetch_array($resultchat)){
              if($count == $i ){
                $queryread = "UPDATE `chat` SET status = '1' WHERE from_user ='".$_COOKIE['username']."' and to_user = '{$receiver}' or from_user = '".$receiver."' and to_user = '{$_COOKIE['username']}'";
                $result = mysqli_query($connect, $queryread);
              }
              $i--;
            }
            $queryupdate = "INSERT INTO `chat` (chat_id, to_user, from_user, time, isi_chat, status) VALUES (NULL, '{$receiver}', '{$_COOKIE['username']}', current_timestamp(), '{$isichat}', '0');";
            $send = mysqli_query($connect,$queryupdate);
          }
          ?>
        </div>
        <?php } else { ?>
        
        
        <div class='card' style='height:600px;width:100%;padding:2% 5% 2% 5%;background-color:transparent;border:none'>
        <h1 id='fromright' style='color:white'><center>Messages</center></h1>
        <div id='listchat'>
          <?php include 'chatlist.php'?>
          </div>
        </div>
        <?php } ?>
        </div>
      </div>
    </div>

    <script>
      var $chat = $(".card-messages");
      $chat.scrollTop($chat.height());
    </script>
    
   
    <!-- end of tampilan messages -->
    
  </body>
</html>

<?php
}
?>