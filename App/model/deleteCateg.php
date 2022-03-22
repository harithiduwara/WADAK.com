<?php
require 'cataconfig.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	mysqli_query($wadak, "DELETE FROM categories WHERE C_ID = $id");
	$_SESSION['message'] = "record deleted!"; 
	header('location: /WADAK.com/App/view/news.php');
}

?>