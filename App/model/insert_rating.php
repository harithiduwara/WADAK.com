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