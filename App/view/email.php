<?php

$servername = "localhost";
$username = "toor";
$password = "toor";
$database = "wadak";

$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

if (isset($_POST['add'])) {
  print_r($_POST);
  $from = $_POST['from'];
  $title = $_POST['title'];
  $com = $_POST['com'];
  $sol = $_POST['sol'];
  $file = $_FILES['any'];
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


  $sql = "INSERT INTO complains(from,title,complain,sol,any) VALUES ('$from','$title','$com','$sol','$ui')";
  mysqli_query($connection, $sql);
  //header("Implementation\view\addac.php?messege=1");
  //header('location:/WADAK.com/App/view/seecomplain.php');
  echo "added sucessfully!";


  exit();
} else {
  //header('location:/WADAK.com/App/view/home.php');
}
