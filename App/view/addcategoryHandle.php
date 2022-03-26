<?php
require_once("dbconfig.php");
if(isset($_POST['add'])){
    $name = $_POST['achievementName'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $level = $_POST['level'];
    $file = $_FILES['file'];
    print_r($file);
    echo "<br>";

    $imagefilename=$file['name'];
    print_r($imagefilename);
    echo "<br>";
    
    $imageerror=$file['error'];
    print_r($imageerror);
    echo "<br>";

    $imagetmp=$file['tmp_name'];
    print_r($imagetmp);
    echo "<br>";

    $fn=explode('.',$imagefilename);
    print_r($fn);
    echo "<br>";

    $fe=strtolower($fn[1]);
    print_r($fe);
    echo "<br>";

    $extension=array('jpeg','jpg','png');
    if(in_array($fe,$extension)){
        $ui='images/'.$imagefilename;
        move_uploaded_file($imagetmp,$ui);
    }

    $adminId = 1;
    $sql = "INSERT INTO achievements(Name,Place,Date,Level,image,Admin_ID) VALUES ('$name','$place','$date','$level','$ui',$adminId)";
    mysqli_query($connection,$sql);
    //header("Implementation\view\addac.php?messege=1");
   header('location:/WADAK.com/App/view/achievemts.php');
    exit();
}else{
    header('location:/WADAK.com/App/view/home.php');
}
?>

