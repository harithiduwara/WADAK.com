<?php

// error_reporting(E_ALL);

echo "Test";

$con = mysqli_connect('localhost', 'toor', 'toor');
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($con, 'wadak');

$data = mysqli_query($con, "select * from register");

while($row=mysqli_fetch_assoc($data))
{
echo $row['name'];
}

echo mysqli_num_rows($data);
session_start();

$name = $_POST['name'];
$username =$_POST['username'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$password = $_POST['password'];
$contactno = $_POST['contactno'];
$address = $_POST['address'];

$s = "select * from register where username='$name'";

$result= mysqli_query($con, $s);

$num= mysqli_num_rows($result);
echo "Test2";
echo $num;

    if($num==1){
    echo "Username already taken!";
    }
    else{
    $reg= "insert into register(name, username, birthday, address, email, contactno, password) values('$name', '$username',
    '$birth','$address', '$email', '$contactno', '$password')";

    echo $reg;

    
    if (mysqli_query($con, $reg)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $reg . "<br>" . mysqli_error($con);
}
    echo "Registration Successful";
// header('location:../view/login.php');
 } 




?>
