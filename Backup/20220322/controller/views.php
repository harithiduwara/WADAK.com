<?php

session_start();

$con = mysqli_connect('localhost', 'toor', 'toor');
if(!$con){
    die("Connection failed" . mysqli_connect_error());
}

mysqli_select_db($con, 'wadak');

$jobid = $_GET["jobid"];

$query ="UPDATE postjob SET views = views +  1 where jobid = $jobid";

if (mysqli_query($con, $query)) {
    echo "New Job Has Created Successfully";
    header('location:/WADAK.com/App/view/jobs.php');
} 
else {
    echo "Error: " . $reg . "<br>" . mysqli_error($con);
}
