<?php

session_start();

$con = mysqli_connect('localhost', 'toor', 'toor');
if(!$con){
    die("Connection failed" . mysqli_connect_error());
}

$uid = $_SESSION["user"]["uid"];

mysqli_select_db($con, 'wadak');

$data = mysqli_query($con, "select * from postjob");

$categoryType = $_POST["postType1"];

if($categoryType == "graphic"){
    header('location:/WADAK.com/App/view/joborders.php?jobType=5');
}else{
    header('location:/WADAK.com/App/view/joborders.php');
}

// $categoryType1 = "select * FROM postjob";



// if (mysqli_query($con, $categoryType1)) {
//     header('location:/WADAK.com/App/view/joborders.php?jobType=5');
// } 
// else {
//     header('location:/WADAK.com/App/view/joborders.php');
// }
