<?php


include('dbconfig.php');


// query untuk mendapat database chat
if(isset($_GET['id'])){
$receiver = (string)($_GET['id']);
$querychat = "select * from chat where from_user ='".$_COOKIE['username']."' and to_user = '{$receiver}' or from_user = '".$receiver."' and to_user = '{$_COOKIE['username']}' ORDER BY time DESC limit 30";
$resultchat = mysqli_query($connect,$querychat);
$count = mysqli_num_rows($resultchat);
$i = $count; 
          while($rowchat = mysqli_fetch_array($resultchat)){
            if($rowchat['from_user'] == $receiver){
              $bg = 'pink';
              $pos = 'right';
              $timealign = 'right';
              
            } else {
              $bg = 'lightgreen';
              $pos = 'left';
              $timealign = 'left';
            }
            
            if($count == $i ){
              $index = 'latest';
            } else {
              $index = 'older';
            }
            if($rowchat['isi_chat'] == "{$_COOKIE['username']} sends love" or $rowchat['isi_chat'] == "{$receiver} sends love"){
              echo "<div align='center' >";
              echo "<div class='card' style='text-align:center;width:fit-content;border:none;transform: rotate(180deg);' id='$index'>";
              echo "<i style='font-size:15px'> {$rowchat['isi_chat']}<img src='img/love.png' style='width:5%'></i> ";
              echo "</div></div><br>";
            } else {
              echo "<div align=$pos >";
              echo "<div class='card' style='background-color:{$bg};text-align:left;width:60%;padding:1% 1% 0 2%;box-shadow: 3px 3px 2px grey;border-radius:10px;transform: rotate(180deg);' id='$index'>";
              echo "<h4> {$rowchat['isi_chat']}</h4><br><i>  <div align=right>{$rowchat['time']}</div> </i> ";
              echo "</div></div><br>";
            }
            $i--;
        }

}


// untuk mendapat data username dan isi chat

?>