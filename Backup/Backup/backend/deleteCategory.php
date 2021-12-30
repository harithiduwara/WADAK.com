<?php
require_once("dbconfig.php");
if(isset($_GET['id'])){

    $id = $_GET['id'];
    $sql = "DELETE FROM categories WHERE C_ID = $id";
    mysqli_query($connection,$sql);
    header("location:../CategoryUI.php");
    exit();
}

?>