<?php

session_start();

$con = mysqli_connect('localhost', 'toor', 'toor');

mysqli_select_db($con, 'wadak');

$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from register where username='$username' AND password='$password'";

$result = mysqli_query($con, $s);

$num = 0;



$num = mysqli_num_rows($result);

$us= "select userrole, uid, profilepic, username from register where username= '$username";

$fetchass= ($result->fetch_assoc());

$us=($fetchass)["userrole"];
$usid=($fetchass)["uid"];
$uspp = ($fetchass)["profilepic"];
$usname = ($fetchass)["username"];



if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION["user"]["uid"]=$usid;

$_SESSION["user"]["profilepic"]=$uspp;

$_SESSION["user"]["username"]= $usname;

if($num==1){
    
    if($us == "user1" ){
        $_SESSION["user"]["userrole"]="user1";
        header('location:/WADAK.com/App/view/home.php'); 
    }
    elseif($us == "admin"){
        $_SESSION["user"]["userrole"]="admin";
        header('location:/WADAK.com/App/view/Admin-dashboard.php'); 
    }
    else{
        $_SESSION["user"]["userrole"]="coadmin";
        header('location:/WADAK.com/App/view/Co-admin dashboard.php');   
    }
  
}
else{
    header('location:/WADAK.com/App/view/login.php');
    
}





?>
