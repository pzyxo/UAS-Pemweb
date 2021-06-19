<?php
include ('dbconfig.php');
if (isset($_POST['submit'])){
  
    
  
        $namadpn = $_POST['namadpn'];
        $namablkg = $_POST['namablkg'];
        $desc = $_POST['deskripsi'];
        $tempatlhr = $_POST['tempatlhr'];
        $tgllhr = $_POST['tgllhr'];
        $almt = $_POST['alamat'];
        $agama = $_POST['religion'];
        $klmn = $_POST['gender'];
        $mink = $_POST['min-age'];
        $maxk = $_POST['max-age'];
        $job = $_POST['pekerjaan'];
        $hobi = $_POST['hobi'];
        $nat = $_POST['nation'];
        $insta = $_POST['ig'];
        $twitt = $_POST['tw'];
        $queryupdate = "UPDATE `datadiri` SET `nama_depan` = '$namadpn', `nama_belakang` = '$namablkg', `gender` = '$klmn', `deskripsi` = '$desc', `alamat` = '$almt', `tempat_lahir` = '$tempatlhr', `tanggal_lahir` = '$tgllhr', `hobi` = '$hobi', `min-age` = '$mink', `max-age` = '$maxk', `pekerjaan` = '$job', `agama` = '$agama', `instagram` = '$insta', `twitter` = '$twitt', `kebangsaan` = '$nat' WHERE `datadiri`.`username` = '{$_COOKIE['username']}'";
        
        if(mysqli_query($connect, $queryupdate)){
            $activity = mysqli_query($connect, "INSERT INTO `activity` (activity_id, activity, username, waktu) VALUES (NULL, 'You update your profile data', '{$_COOKIE['username']}', current_timestamp())");
            $act = mysqli_query($connect, $activity);
            header("Location: profile.php");
        } else {
            echo "{$queryupdate}";
            echo "error";
        }
    }

    mysqli_close($connect);




?>