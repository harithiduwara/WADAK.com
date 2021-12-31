<?php
require 'newsconfig.php';

if(isset($_POST['Update']))
{
$id=$_POST["id"];
$date=$_POST["date"];
$description=$_POST["description"];



$sql = "UPDATE news SET date ='$date',description='$description' WHERE News_ID='$id'";

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