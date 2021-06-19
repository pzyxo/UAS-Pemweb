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
$hobip = (string)($row2['hobi']);
$alamatp = (string)($row2['alamat']);
$tempatp = (string)($row2['tempat_lahir']);
$tanggalp = (string)($row2['tanggal_lahir']);
$minp = (string)($row2['min-age']);
$maxp = (string)($row2['max-age']);
$pekerjaanp = (string)($row2['pekerjaan']);
$religionp = (string)($row2['agama']);
$igp = (string)($row2['instagram']);
$twp = (string)($row2['twitter']);
$nationp = (string)($row2['kebangsaan']);

mysqli_close($connect);
?>