<?php

include('dbconfig.php');

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $username = $_POST['username'];
    $namadepan = $_POST['namadpn'];
    $namablkg = $_POST['namablkg'];
    $deskripsi = $_POST['deskripsi'];
    
    
    $query1 = "INSERT INTO login (email, password) VALUES ('{$email}','{$pass}')";
    $query2 = "INSERT INTO datadiri (username, email, nama_depan, nama_belakang, deskripsi) VALUES ('{$username}','{$email}','{$namadepan}','{$namablkg}', '{$deskripsi}')";
    // $result1 = mysqli_query($connect,$query1);
    // $result2 = mysqli_query($connect,$query2);

    if(mysqli_query($connect,$query1) && mysqli_query($connect,$query2)){
        echo ("Registrasi Berhasil");
        echo ("<a href='login.php'> Silahkan login </a>");
    } else {
        header("Location: login.php");
    }
    
    
}

mysqli_close($connect);

?>