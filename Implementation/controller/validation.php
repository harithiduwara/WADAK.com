<?php

session_start();

$con = mysqli_connect('localhost', 'toor', 'toor');

mysqli_select_db($con, 'wadak');

$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from register where username='$username' AND password='$password'";

// echo $username;

// echo $s;

$result = mysqli_query($con, $s);

$num = 0;

// echo $num;

$num = mysqli_num_rows($result);

// echo $num+5;

// echo $result;

if($num==1){
    header('location:/WADAK.com/Implementation/view/home.php');
    // echo "1";
}
else{
    header('location:/WADAK.com/Implementation/view/login.php');
    // echo "2";
}




?>
