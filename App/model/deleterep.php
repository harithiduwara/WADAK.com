<?php
include_once 'cataconfig.php';
$sql = "DELETE FROM complains WHERE c_ID='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo 
	"<script type='text/javascript'>
        alert('Record Deleted');
        window.location='/WADAK.com/App/view/View Report.php';
        </script>";;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>