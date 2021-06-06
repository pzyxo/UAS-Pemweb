<?php

include('dbconfig.php');


$query = "SELECT * from datadiri WHERE username = '{$_COOKIE['username']}'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result);
// catch gender and determine it
$gender = (string)($row['gender']);
$query1 = "SELECT * from datadiri WHERE username != '{$_COOKIE['username']}' and gender != '{$gender}' order by rand() LIMIT 3";
$result1 = mysqli_query($connect, $query1);


?>