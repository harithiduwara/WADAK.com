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

=======
>>>>>>> Stashed changes
    $sql = "DELETE FROM categories WHERE C_ID = $id";
    mysqli_query($connection,$sql);
    header("location:/WADAK.com/App/view/CategoryUI.php");
    exit();

}
>>>>>>> af9bd960dc3198dfc85baf73645bdf1764f4ce9b

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