<?php
include_once 'cataconfig.php';

$sql = "DELETE FROM register WHERE uid='" . $_GET["id"] . "'";

// $sql = "UPDATE register  SET status= 1 where uid = '".$_GET["id"]."";

if (mysqli_query($conn, $sql)) {
    echo 
	"<script type='text/javascript'>
        alert('Record Deleted');
        window.location='/WADAK.com/App/view/ServiceProviderUI-admin.php';
        </script>";;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>