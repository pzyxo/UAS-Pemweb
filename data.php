<?php

include('dbconfig.php');

$query1 = "select * from login where email='".$_COOKIE['email']."' and password='".$_COOKIE['password']."'";
$query2 = "select * from datadiri where email='".$_COOKIE['email']."'";
$result1 = mysqli_query($connect,$query1);
$row1 = mysqli_fetch_array($result1);


$result2 = mysqli_query($connect,$query2);
$row2 = mysqli_fetch_array($result2);



// catch data
$username = (string)($row2['username']);
$gender = (string)($row2['gender']);
$namadepan = (string)($row2['nama_depan']);
$namablkg = (string)($row2['nama_belakang']);
$deskripsi = (string)($row2['deskripsi']);
$img = (string)($row2['img']);

mysqli_close($connect);
?>