<?php
require_once("dbconfig.php");
if(isset($_POST['add'])){
    $name = $_POST['achievementName'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $id = $_POST['id'];
    $adminId = 1;
    $sql = "UPDATE achievements SET Name='$name',Place='$place',Date='$date',Admin_ID=$adminId WHERE A_ID=$id";
    //UPDATE table_name
//SET column1 = value1, column2 = value2, ...
//WHERE condition;
    mysqli_query($connection,$sql);
    //header("Implementation\view\addac.php?messege=1");
    header('location:/WADAK.com/Implementation/view/achievemts.php');
    exit();
}else{
    header('location:/WADAK.com/Implementation/view/home.php');
}
?>