<?php
if (isset($_GET['data'])) {
	$id = $_GET['News_ID'];
	mysqli_query($db, "DELETE FROM news WHERE News_ID=$id");
	$_SESSION['message'] = "record deleted!"; 
	header('location: index.php');
}
?>