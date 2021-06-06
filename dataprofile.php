<?php

include('dbconfig.php');

$user = (string)($_GET['id']);

$query2 = "select * from datadiri where username='".$user."'";

$result2 = mysqli_query($connect,$query2);
$row2 = mysqli_fetch_array($result2);



// catch data
$usernamep = (string)($row2['username']);
$emailp = (string)($row2['email']);
$genderp = (string)($row2['gender']);
$namadepanp = (string)($row2['nama_depan']);
$namablkgp = (string)($row2['nama_belakang']);
$deskripsip = (string)($row2['deskripsi']);
$imgp = (string)($row2['img']);

mysqli_close($connect);
?>