<?php
include_once 'newsconfig.php';
$sql = "DELETE FROM news WHERE News_ID='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo 
	"<script type='text/javascript'>
        alert('Record Deleted');
        window.location='/WADAK.com/App/view/news.php';
        </script>";;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>