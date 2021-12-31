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
$jobid = $title = $description = $budget = $joblist = "";
$jobidErr = $titleErr = $descriptionErr = $budgetErr = $joblistErr = "";

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(empty($_POST["title"])){
    $titleErr = "Job Title is required!";
}
else{
    $title = test_input($_POST["title"]);
}

if(empty($_POST["description"])){
    $descriptionErr = "Description is required!";
}
else{
    $description = test_input($_POST["description"]);
}

if(empty($_POST["joblist"])){
    $joblistErr = "joblist is required!";
}
else{
    $joblist = test_input($_POST["joblist"]);
}

if(empty($_POST["price"])){
    $budgetErr = "budget is required!";
}
else{
    $budget = test_input($_POST["price"]);
}

$s = "select * from postjob where title='$title'";


$jobpost = "insert into postjob(title, description, budget, jobtype, uid) values('$title', '$description', '$budget', '$joblist', '$uid')";

if (mysqli_query($con, $jobpost)) {
    echo "New Job Has Created Successfully";
    header('location:/WADAK.com/Implementation/view/home.php');
} 
else {
    echo "Error: " . $reg . "<br>" . mysqli_error($con);
}