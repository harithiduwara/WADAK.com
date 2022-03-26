
<?php

echo "<pre>"
; print_r($_POST);

session_start();

$con = mysqli_connect('localhost', 'toor', 'toor');
if(!$con){
    die("Connection failed" . mysqli_connect_error());
}

$jobid = $_POST['jobid'];

$uid = $_SESSION["user"]["uid"];

mysqli_select_db($con, 'wadak');

$data = mysqli_query($con, "SELECT postType, uid from postjob where jobid=$jobid");

$data = mysqli_fetch_assoc($data);


$newBudget = $description= "";
$newBudgetErr = $descriptionErr="";

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$postOwnerId = $data["uid"];

$postType =  $data["postType"];

$description = test_input($_POST["description"]);


$newBudget = test_input($_POST["newbudget"]);



$apply = "insert into postApplication( applicantId, postOwnerId, jobid, newBudget, description, postType) values('$uid', '$postOwnerId', '$jobid', '$newBudget', '$description', '$postType')";
print_r($apply);
if (mysqli_query($con, $apply)) {
    echo "New Job Has Created Successfully";
    header("location:/WADAK.com/App/view/jobpostview.php?jobid=$jobid");
} 
else {
    echo "Error: " . $reg . "<br>" . mysqli_error($con);
}
