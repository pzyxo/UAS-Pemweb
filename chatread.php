<?php


include('dbconfig.php');

// default time zone
date_default_timezone_set("Asia/Bangkok");

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
$dateNow = "$mydate[month]-$mydate[mday]-$mydate[year], $mydate[hours]:$mydate[minutes]";

// query untuk mendapat database chat lama
$querychat = "select * from chat where username='".$_COOKIE['username']."'";
$resultchat = mysqli_query($connect,$querychat);
$rowchat = mysqli_fetch_array($resultchat);


// untuk mendapat data username dan isi chat
$username = (string)($rowchat['username']);
$chatold = ($rowchat['chat']);
echo $chatold;
$chatp = explode("\n", $chatold);
echo "<table border='1'>";
        echo "<tr>
        <th>Waktu</th>
        <th>Sender</th>
        <th>Chat</th></tr>";
foreach($chatp as $chatrow){
    $chatreal = explode(" | ", $chatrow);
    if($chatreal[1] == "furain"){
        echo "<tr>
        <td>{$chatreal[0]}</td>
        <td>{$chatreal[1]}</td>
        <td>{$chatreal[2]}</td>
        </tr>";
    }
}

foreach($chatp as $chatrow){
    $chatreal = explode(" | ", $chatrow);
    if($chatreal[1] == "rx"){
        echo "<tr>
        <td>{$chatreal[0]}</td>
        <td>{$chatreal[1]}</td>
        <td>{$chatreal[2]}</td>
        </tr>";
    }
}
echo "</table>";
?>