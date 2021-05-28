<?php
session_start();
session_destroy();
setcookie("email", "", time()+3*30*24*3600,"/");
setcookie("pass", "", time()+3*30*24*3600,"/");
//redirect ke halaman login
header("Location: index.php");

?>