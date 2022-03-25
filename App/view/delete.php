<?php
$servername = "localhost";
$username = "toor";
$password = "toor";
$database = "wadak";

$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if(isset($_GET['did'])){
    $A_ID=$_GET['did'];
    $sql="delete from achievements WHERE A_ID=$A_ID";
    mysqli_query($connection,$sql);
    header('location:/WADAK.com/App/view/achievemts.php');
    exit();
}else{
    header('location:/WADAK.com/App/view/home.php');

}
