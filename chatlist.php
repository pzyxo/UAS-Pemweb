<?php


include('dbconfig.php');


// query untuk mendapat database chat
$querylist = "select * from chat order by chat_id DESC";
$resultlist = mysqli_query($connect,$querylist);
echo "<center><div class='card listchat' id='fromleft' style='height:450px;overflow:auto;padding:5%;border-radius:10px'>";
// if(mysqli_fetch_array($resultlist) == '') {
//     echo "<h3>There is no messages here yet</h3>
//     <h6>Try find out more people</h6>
//     <a href='match.php' class='btn btn-dark btn-lg button2-pro' style='background-color: #f78fb3; border: 1px solid white;border-radius:15px;margin-top:1%'>Find Match</a>";
// }    
while($rowlist = mysqli_fetch_array($resultlist)){
        
    if($rowlist['status'] == '0'){
        if($rowlist['to_user'] == $_COOKIE['username']){
            $queryimg = "select * from datadiri where username='{$rowlist['from_user']}'";
            $resultimg = mysqli_query($connect,$queryimg);
            $rowimg = mysqli_fetch_array($resultimg);
            
            echo "<a href='messages.php?id={$rowlist['from_user']}#latest' style='text-decoration:none;color:black'>";
            echo "<div class='card' id='card-list' style='background-color:pink;text-align:left;width:80%;padding:1% 2% 0 2%;border-radius:15px'";
            echo "<p><div align='right' style='color:white'>{$rowlist['time']}</div>";
            echo "<h3><img src='{$rowimg['img']}' style='width:50px;border-radius:100%'>";
            echo " {$rowimg['nama_depan']} {$rowimg['nama_belakang']}</h3>";
            echo "<span style='border-radius:5px;background-color:white;color:black;padding:1%'>< {$rowlist['isi_chat']}</span>";
            echo "<p></div></a><br>";
        }
        if($rowlist['from_user'] == $_COOKIE['username']){
            $queryimg = "select * from datadiri where username='{$rowlist['to_user']}'";
            $resultimg = mysqli_query($connect,$queryimg);
            $rowimg = mysqli_fetch_array($resultimg);

            echo "<a href='messages.php?id={$rowlist['to_user']}#latest' style='text-decoration:none;color:black'>";
            echo "<div class='card' id='card-list' style='background-color:pink;text-align:left;width:80%;padding:1% 2% 0 2%;border-radius:15px'";
            echo "<p><div align='right' style='color:white'>{$rowlist['time']}</div>";
            echo "<h3><img src='{$rowimg['img']}' style='width:50px;border-radius:100%'>";
            echo " {$rowimg['nama_depan']} {$rowimg['nama_belakang']}</h3>";
            echo "<span style='border-radius:5px;background-color:white;color:black;padding:1%'><b>></b> {$rowlist['isi_chat']}</span>";
            echo "<p></div></a><br>";

            
        }    
    }

}
echo "</div></center>";

mysqli_close($connect);

?>