<?php
require 'newsconfig.php';
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($wadak, "DELETE FROM news WHERE News_ID=$id");
	$_SESSION['message'] = "record deleted!"; 
	header('location: /WADAK.com/App/view/news.php');
} 
?>

