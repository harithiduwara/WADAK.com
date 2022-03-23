<?php
require 'newsconfig.php';

if(isset($_POST['reply']))
{

$question_id=$_POST["question_id"];
$answer=$_POST["answer"];


$sql = "UPDATE faq SET answer ='$answer'WHERE question_id='$question_id'";

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