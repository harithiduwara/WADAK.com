<?php
require 'newsconfig.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $rate = $_POST["rate"];
    $comment=$_POST["comment"];
    $raterId=$_GET["raterId"];
 
    $sql = "INSERT INTO star_rating (raterId,name,rate,comment) VALUES ('$raterId','$name','$rate','$comment')";
    if (mysqli_query($conn, $sql))
    {
            echo "<script type='text/javascript'>
            alert('Successfully inserted');
            window.location='/WADAK.com/App/view/Categorymain.php';
            </script>";;
        }
        else{
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    mysqli_close($conn);
}
?>