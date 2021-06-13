<?php


include('dbconfig.php');


$receiver = (string)($_GET['id']);
// mengupdate database dengan chat baru
    $queryupdate = "INSERT INTO `chat` (chat_id, to_user, from_user, time, isi_chat) VALUES (NULL, '{$receiver}', '{$_COOKIE['username']}', current_timestamp(), '{$_POST['isichat']}');";
    if(mysqli_query($connect,$queryupdate)){
        echo "sukses";
        mysqli_close($connect);
        header("Location: messages.php?id={$receiver}#latest");
    }
?>