<?php

include('dbconfig.php');

if(isset($_POST['submit'])){

    if(!isset($_POST['email'])){
        header("Location: register.php?failedemail=true");
    }
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $username = $_POST['username'];
    $namadepan = $_POST['namadpn'];
    $namablkg = $_POST['namablkg'];
    $gender = $_POST['gender'];
    $deskripsi = $_POST['deskripsi'];

    $querycheck = "SELECT * FROM login";
    $querycheck2 = "SELECT * FROM datadiri";

    $queryc = (mysqli_query($connect,$querycheck));
    $queryc2 = (mysqli_query($connect,$querycheck2));

    
    $rowcheck = mysqli_fetch_array($queryc);
    $rowcheck2 = mysqli_fetch_array($queryc2);

    
    
    $query1 = "INSERT INTO login (email, password) VALUES ('{$email}','{$pass}')";
    $query2 = "INSERT INTO datadiri (username, email, nama_depan, nama_belakang, gender, deskripsi) VALUES ('{$username}','{$email}','{$namadepan}','{$namablkg}', '{$gender}','{$deskripsi}')";
    // $result1 = mysqli_query($connect,$query1);
    // $result2 = mysqli_query($connect,$query2);

    if(mysqli_query($connect,$query1) && mysqli_query($connect,$query2)){
        setcookie("username", $username, time()+3*30*24*3600,"/");
        setcookie("gender", $gender, time()+3*30*24*3600,"/");
        setcookie("email", $email, time()+3*30*24*3600,"/");
        setcookie("password", $pass, time()+3*30*24*3600,"/");
        header('Location: profile.php?change=true');
        
    } else {
        header("Location: register.php?failed=true");
    }
    
    
}

mysqli_close($connect);

?>