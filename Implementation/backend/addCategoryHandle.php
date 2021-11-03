<?php

require_once("dbconfig.php");

if(isset($_POST['add'])){
    $name = $_POST['categoryName'];
    $adminId = 1;
    $sql = "INSERT INTO categories(Name,Admin_ID) VALUES ('$name',$adminId)";
    mysqli_query($connection,$sql);
    header("location:../AddCategory.php?messege=1");
    exit();
}else{
    header('location:/WADAK.com/Implementation/view/home.php');
}
?>
