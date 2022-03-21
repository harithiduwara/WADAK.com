<?php
$servername= "localhost";
$username= "toor";
$password= "toor";
$dbname= "wadak";

//The connection
$conn= new mysqli($servername,$username,$password,$dbname);
//check connection
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }


?>
