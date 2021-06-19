<?php


include('dbconfig.php');


if(isset($_POST['submit'])){
// mengupdate database dengan chat baru
    $support = (string)($_POST['support']);
    $queryupdate = "INSERT INTO `chat` (chat_id, to_user, from_user, time, isi_chat, status) VALUES (NULL, 'admin', '{$_COOKIE['username']}', current_timestamp(), '{$support}', '5')";
    if(mysqli_query($connect,$queryupdate)){
        mysqli_close($connect);
        header("Location: settings.php");
        
    } else {
        header("Location: settings.php?failed=true");
    }
}
?>