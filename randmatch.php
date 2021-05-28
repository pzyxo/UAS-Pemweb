<?php

include('dbconfig.php');


$query1 = "SELECT * from datadiri WHERE username != '{$_COOKIE['username']}' order by rand() LIMIT 3";
$result1 = mysqli_query($connect,$query1);


?>