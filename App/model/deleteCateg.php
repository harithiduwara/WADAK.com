<?php
/*require 'cataconfig.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
	mysqli_query($wadak, "DELETE FROM categories WHERE C_ID = $id");
	$_SESSION['message'] = "record deleted!"; 
	header('location: /WADAK.com/App/view/CategoryUI.php');
}*/

?>



<?php
include_once 'cataconfig.php';
$sql = "DELETE FROM categories WHERE C_ID='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo 
	"<script type='text/javascript'>
        alert('Record Deleted');
        window.location='/WADAK.com/App/view/CategoryUI.php';
        </script>";;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>