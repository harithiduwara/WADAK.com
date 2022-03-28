<?php
session_start();

$uid = $_SESSION["user"]['uid'];

$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');

if(!$con){
die("Fatal Error: Connection Failed!");
}

?>