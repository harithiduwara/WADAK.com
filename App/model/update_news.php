<?php
require 'newsconfig.php';
$News_ID=$_GET['updateid'];
if(isset($_POST['Update']))
{

$date=$_POST["date"];
$description=$_POST["description"];



$sql = "UPDATE news SET  date ='$date',description='$description' WHERE News_ID='$News_ID'";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Successfully updated');
        window.location='/WADAK.com/App/view/news.php';
        </script>";;
    }
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
}
else 
{
    echo "cancelled";
}

?>