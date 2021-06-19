<?php


include('dbconfig.php');


$receiver = (string)($_GET['id']);
// mengupdate database dengan chat baru
    $queryupdate = "INSERT INTO `chat` (chat_id, to_user, from_user, time, isi_chat) VALUES (NULL, '{$receiver}', '{$_COOKIE['username']}', current_timestamp(), '{$_COOKIE['username']} sends love');";
    $queryactivity = "INSERT INTO `activity` (activity_id, activity, username, waktu) VALUES (NULL, 'You send love to {$receiver}', '{$_COOKIE['username']}', current_timestamp());";
    if(mysqli_query($connect,$queryupdate)){
        mysqli_query($connect, $queryactivity);
        mysqli_close($connect);
        header("Location: match.php");
        
    }
?>