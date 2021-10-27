<?php
$con = mysqli_connect('localhost', 'toor', 'toor');
if(!$con){
    die("Connection failed" . mysqli_connect_error());
}
mysql_select_db($con, 'wadak');

$data = mysqli_query($con, "select * from postjob");

session_start();
