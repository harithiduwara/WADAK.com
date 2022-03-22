<?php
require 'newsconfig.php';

if(isset($_POST['save']))
{

$date=$_POST["date"];
$description=$_POST["description"];



$sql = "INSERT INTO news(date,description)VALUES('$date','$description')";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Successfully inserted');
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