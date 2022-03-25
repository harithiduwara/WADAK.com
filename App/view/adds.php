<?php
require_once("dbconfig.php");
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $des = $_POST['description'];
    $job = $_POST['job'];
    $exp = $_POST['exp'];
    $file = $_FILES['image'];
    print_r($file);
    echo "<br>";

    $imagefilename = $file['name'];
    print_r($imagefilename);
    echo "<br>";

    $imageerror = $file['error'];
    print_r($imageerror);
    echo "<br>";

    $imagetmp = $file['tmp_name'];
    print_r($imagetmp);
    echo "<br>";

    $fn = explode('.', $imagefilename);
    print_r($fn);
    echo "<br>";

    $fe = strtolower($fn[1]);
    print_r($fe);
    echo "<br>";

    $extension = array('jpeg', 'jpg', 'png');
    if (in_array($fe, $extension)) {
        $ui = 'images/' . $imagefilename;
        move_uploaded_file($imagetmp, $ui);
    }


    $sql = "INSERT INTO postservice(title,description,category,image,experience) VALUES ('$title','$des','$job','$ui','$exp')";
    mysqli_query($connection, $sql);
    //header("Implementation\view\addac.php?messege=1");
    header('location:/WADAK.com/App/view/aservices.php');
    exit();
} else {
    header('location:/WADAK.com/App/view/home.php');
}
