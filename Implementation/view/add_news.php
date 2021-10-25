<?php
require 'newsconfig.php';

if(isset($_POST['save']))
{
$newsid=$_POST["newsid"];
$date=$_POST["date"];
$description=$_POST["description"];



$sql = "INSERT INTO news(News_ID,date,description)VALUES('$newsid','$date','$description')";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Successfully inserted');
        window.location='News.php';
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