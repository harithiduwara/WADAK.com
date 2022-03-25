<?php

session_start();

$con = mysqli_connect('localhost', 'toor', 'toor');
if(!$con){
    die("Connection failed" . mysqli_connect_error());
}

$uid = $_SESSION["user"]["uid"];

mysqli_select_db($con, 'wadak');

$data = mysqli_query($con, "select * from postjob");

session_start();

$jobid = $title = $description = $budget = $joblist = $postType = "";
$jobidErr = $titleErr = $descriptionErr = $budgetErr = $joblistErr = $postTypeErr ="";

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(empty($_POST["address"])){
    // $titleErr = "";
}
else{
    $address = test_input($_POST["address"]);
}

if(empty($_POST["conatctNo"])){
    // $descriptionErr = "";
}
else{
    $description = test_input($_POST["conatctNo"]);
}

if(empty($_POST["telegram"])){
    // $postTypeErr = "";
}
else{
    $postType = test_input($_POST["telegram"]);
}

if(empty($_POST["twitter"])){
    // $joblistErr = "";
}
else{
    $joblist = test_input($_POST["twitter"]);
}

if(empty($_POST["Instagram"])){
    // $budgetErr = "";
}
else{
    $budget = test_input($_POST["Instagram"]);
}

require '/Applications/MAMP/htdocs/WADAK.com/App/controller/updateProfilePicture.php';

$filename= $filenameErr ="";



if($uploadok == 1){
     $filename = $target_file;
 } 


// $s = "select * from postjob where title='$title'";


$jobpost = "insert into postjob(title, description, budget, jobtype, uid, filename, postType) values('$title', '$description', '$budget', '$joblist', '$uid', '$filename', '$postType')";

if (mysqli_query($con, $jobpost)) {
    echo "New Job Has Created Successfully";
    header('location:/WADAK.com/App/view/home.php');
} 
else {
    echo "Error: " . $reg . "<br>" . mysqli_error($con);
}
