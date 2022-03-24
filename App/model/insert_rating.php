<?php
require 'newsconfig.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $rate = $_POST["rate"];
    $comment=$_POST["comment"];
 
    $sql = "INSERT INTO star_rating (name,rate,comment) VALUES ('$name','$rate','$comment')";
    if (mysqli_query($conn, $sql))
    {
        echo "Your Rate added successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>