<?php

include('dbconfig.php');

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($email != "" && $pass != ""){

        $query1 = "select * from login where email='".$email."' and password='".$pass."'";
        $query2 = "select * from datadiri where email='".$email."'";
        $result1 = mysqli_query($connect,$query1);
        $row1 = mysqli_fetch_array($result1);


        $result2 = mysqli_query($connect,$query2);
        $row2 = mysqli_fetch_array($result2);


        if ($row1['email'] == $email && $row1['password'] == $pass){
            // catch data
            $username = (string)($row2['username']);
            $gender = (string)($row2['gender']);


            if($result1 > 0){
                setcookie("username", $username, time()+3*30*24*3600,"/");
                setcookie("gender", $gender, time()+3*30*24*3600,"/");
                setcookie("email", $email, time()+3*30*24*3600,"/");
                setcookie("password", $pass, time()+3*30*24*3600,"/");
                header('Location: index.php');
            }
        
        }else{
            header('Location: login.php?notif=true');
        }

    }
}

mysqli_close($connect);

?>