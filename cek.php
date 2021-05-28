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
            
          </ul>
          
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- tampilan activity -->
    <?php

    if (!isset($_COOKIE['email'])){
        ?>
        
    <div class="container container-fluid" style="padding-top:10%">
        <center>
    
        <!-- <style>
            .btnalert {
                text-decoration:none;color:red;border:5px solid red;border-radius:15px;padding:1% 0 1% 1%; margin-right:1%;
            }

            .btnalert:hover {
                background-color:red;
                color:white !important;

            }
        </style> -->
        <span><h1>Silahkan <a href='login.php' class='btn btn-outline-danger btn-lg'>
        <strong>Sign In</strong>
        </a> terlebih dahulu</h1>
        <img src="img/background.png" width='100%'>
        </span>
    <?php
        exit();
    }

    ?>
    </center>
    </div>
    <!-- end of tampilan activity -->
  </body>
</html>
