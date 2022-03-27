<?php
require 'newsconfig.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    session_start();

    $name = $_POST["name"];
    $rate = $_POST["rate"];
    $comment=$_POST["comment"];
    $jobId = $_POST["jobId"];
    $uid = $_SESSION["user"]['uid'];

    $sql = "INSERT INTO star_rating (jobId,raterId,name,rate,comment) VALUES ('$jobId','$uid','$name','$rate','$comment')";
    if (mysqli_query($conn, $sql))
    {
            echo "<script type='text/javascript'>
            alert('Successfully inserted');
            window.location='/WADAK.com/App/view/hirepersondashboard.php';
            </script>";;
        }
        else{
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    mysqli_close($conn);
}
?>