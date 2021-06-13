<?php


include('dbconfig.php');


// query untuk mendapat database chat
$querychat = "select * from chat where from_user ='".$_COOKIE['username']."' or to_user = '".$_COOKIE['username']."' ORDER BY to_user ASC ";
$resultchat = mysqli_query($connect,$querychat);
echo "<div class='list-group' style='width:fit-content;'>";
while($rowchat = mysqli_fetch_array($resultchat)){
    if($rowchat['to_user'] != $_COOKIE['username']){
    echo "<a href='messages.php?id={$rowchat['to_user']}#latest' class='list-group-item list-group-item-primary'>{$rowchat['to_user']}</a>";
    }

}
echo "</div>";


?>