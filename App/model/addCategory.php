<?php
require 'cataconfig.php';

if(isset($_POST['save']))
{

$Name=$_POST["name"];
$budget=$_POST["budget"];

require '/Applications/MAMP/htdocs/WADAK.com/App/controller/fileupload.php';

// $sql = "INSERT INTO jobCategories (Name) VALUES('$Name')";


if($uploadok == 1){
    $filename = $target_file;
}

$sql = "INSERT INTO jobCategories (categoryName, categoryImage) VALUES('$Name', '$filename')";



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