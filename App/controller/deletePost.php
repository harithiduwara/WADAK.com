<?php
session_start();

$jobid = $_GET["jobid"];

$uid = $_SESSION["user"]['uid'];

$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');

if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}

mysqli_query($con, "update postjob set status = 5 where jobid=$jobid");

header('location:/WADAK.com/App/view/home.php');

?>