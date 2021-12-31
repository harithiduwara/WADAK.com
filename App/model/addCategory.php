<?php
require 'cataconfig.php';

if(isset($_POST['save']))
{

$Name=$_POST["name"];
$budget=$_POST["budget"];



$sql = "INSERT INTO categories(Name,value)VALUES('$Name','$budget')";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Successfully inserted');
        window.location='/WADAK.com/App/view/CategoryUI.php';
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