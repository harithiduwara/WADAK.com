<?php
require 'newsconfig.php';

if(isset($_POST['add']))
{

$question=$_POST["question"];

$sql = "INSERT INTO faq(question)VALUES('$question')";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Successfully inserted');
        window.location='/WADAK.com/App/view/Q&A.php';
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