<?php

session_start();

$con = mysqli_connect('localhost', 'toor', 'toor');
if(!$con){
    die("Connection failed" . mysqli_connect_error());
}

$uid = $_SESSION["user"]["uid"];

mysqli_select_db($con, 'wadak');

$data = mysqli_query($con, "select * from postjob");

$jobid = $title = $description = $budget = $joblist = $postType = "";
$jobidErr = $titleErr = $descriptionErr = $budgetErr = $joblistErr = $postTypeErr ="";

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(empty($_POST["address"])){

    $address = "";
}
else{
    $address = test_input($_POST["address"]);
}

if(empty($_POST["contactno"])){
;
    $contactno = "";
}
else{
    $contactno = test_input($_POST["contactno"]);
}

if(empty($_POST["profileDescription"])){

    $profileDescription = "";
}
else{
    $profileDescription = test_input($_POST["profileDescription"]);
}

if(empty($_POST["telegram"])){

    $telegram ="";
}
else{
    $telegram = test_input($_POST["telegram"]);
}

if(empty($_POST["twitter"])){
   
    $twitter = "";
}
else{
    $twitter = test_input($_POST["twitter"]);
}

if(empty($_POST["instagram"])){
 
     $instagram = "";
}
else{
    $instagram = test_input($_POST["instagram"]);
}

require '/Applications/MAMP/htdocs/WADAK.com/App/controller/fileupload.php';

$filename= $filenameErr ="";



if($uploadok == 1){
     $filename = $target_file;
 }
 else{
     $filename = "/WADAK.com/App/uploads/defaultProfilePic.jpg";
 } 


// $s = "select * from postjob where title='$title'";


$updateProfile = "UPDATE register SET address ='$address' , contactno = '$contactno', telegram = '$telegram', twitter = '$twitter', instagram = '$instagram', profilePic = '$filename', profileDescription = '$profileDescription' where uid =$uid" ;

if (mysqli_query($con, $updateProfile)) {
    echo "You are updated successfully";
    header('location:/WADAK.com/App/view/hirepersondashboard.php');
} 
else {
    echo "Error: " . $reg . "<br>" . mysqli_error($con);
}
