<?php
$servername= "127.0.0.1";
$username= "root";
$password= "";
$dbname= "wadak_db";
//The connection
$conn= new mysqli($servername,$username,$password,$dbname);
//check connection
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }

    echo "";
?>