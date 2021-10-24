<?php

session_start();
header('location:login.html')

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'wadak');

$name = $_POST['name'];
$username =$_POST['username'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$password = $_POST['password'];
$contactno = $_POST['contactno'];
$address = $_POST('address');

$s = "select *  from register where email='$email'";

$result= mysqli_query($con, $s);

$num= mysqli_num_rows($result);

if($num==1){
    echo "Username already taken!";
}
else{
    $reg= "insert into user(name, username, birthday, address, email, contactno, password) values($name, $username, $birth, $email, $password)";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}




?>
