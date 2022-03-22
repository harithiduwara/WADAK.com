<?php
require_once("dbconfig.php");
if(isset($_POST['add'])){
    $name = $_POST['achievementName'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $adminId = 1;
    $sql = "INSERT INTO achievements(Name,Place,Date,Admin_ID) VALUES ('$name','$place','$date',$adminId)";
    mysqli_query($connection,$sql);
    //header("Implementation\view\addac.php?messege=1");
    header('location:/WADAK.com/App/view/achievemts.php');
    exit();
}else{
    header('location:/WADAK.com/App/view/home.php');
}
?>

