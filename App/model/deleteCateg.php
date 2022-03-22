<?php
require 'cataconfig.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
    $sql = "DELETE FROM categories WHERE C_ID = $id";
    mysqli_query($connection,$sql);
    header("location:/WADAK.com/App/view/CategoryUI.php");
    exit();

}

?>