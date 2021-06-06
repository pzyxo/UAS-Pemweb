<?php


include('dbconfig.php');

// default time zone
date_default_timezone_set("Asia/Bangkok");

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
$dateNow = "$mydate[month]-$mydate[mday]-$mydate[year], $mydate[hours]:$mydate[minutes]";
echo $dateNow;

// query untuk mendapat database chat lama
$querychat = "select * from chat where username='".$_COOKIE['username']."'";
$resultchat = mysqli_query($connect,$querychat);
$rowchat = mysqli_fetch_array($resultchat);


// untuk mendapat data username dan isi chat
$username = (string)($rowchat['username']);
$chatold = (string)($rowchat['chat']);
echo $username;

if(isset($_POST['send'])){
    $getchat = $_POST['isichat'];
    echo $chatold;
    // merekam chat baru ke dalam sebuah variabel
    $chatnew = "{$dateNow} | {$_COOKIE['username']} | {$getchat}";

// mengupdate database dengan chat baru
    $queryupdate = "UPDATE chat SET chat= '{$chatold}\r\n{$chatnew}' WHERE chat.username= '{$_COOKIE['username']}'";
    echo $queryupdate;
    if(mysqli_query($connect,$queryupdate)){
        echo "sukses";
        mysqli_close($connect);
        header('Location: messages.php');
    }
}
?>