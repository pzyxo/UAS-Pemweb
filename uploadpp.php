<?php
include ('dbconfig.php');
$image = $_POST['image'];

list($type, $image) = explode(';',$image);
list(, $image) = explode(',',$image);

$image = base64_decode($image);
$image_name = time().'.png';
file_put_contents('img/users/'.$image_name, $image);
$sql = "UPDATE datadiri SET img='img/users/{$image_name}' WHERE username='".$_COOKIE['username']."'";
$saved = mysqli_query($connect, $sql);
$activity = mysqli_query($connect, "INSERT INTO `activity` (activity_id, activity, username, waktu) VALUES (NULL, 'You update your profile photo', '{$_COOKIE['username']}', current_timestamp())");
$act = mysqli_query($connect, $activity);
header('Location: profile.php');

?>