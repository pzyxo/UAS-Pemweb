<?php
include ('dbconfig.php');
if (isset($_POST['submit'])){
    $oldpass = $_POST['oldpassword'];
    $querycheck = "SELECT * FROM login where email = '{$_COOKIE['email']}'";
    $check = mysqli_query($connect,$querycheck);
    $rowcheck = mysqli_fetch_array($check);
    $oldpass1 = (string)($rowcheck['password']);
    if($oldpass1 == $oldpass){
        $newpass = $_POST['newpassword'];
        $queryupdate = "UPDATE `login` SET `password` = '$newpass' WHERE `login`.`email` = '{$_COOKIE['email']}'";
        setcookie("password", $newpass, time()+3*30*24*3600,"/");

            
        if(mysqli_query($connect, $queryupdate)){
            $activity = mysqli_query($connect, "INSERT INTO `activity` (activity_id, activity, username, waktu) VALUES (NULL, 'You update your password', '{$_COOKIE['username']}', current_timestamp())");
            $act = mysqli_query($connect, $activity);
            header("Location: settings.php?true=true");
        } else {
            echo "{$queryupdate}";
            echo "error";
        }
    } else {
        header("Location: settings.php?false=true");
    } 
}

mysqli_close($connect);

?>