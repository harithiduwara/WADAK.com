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

//validation

$nameErr= $usernameErr = $birthErr = $emailErr = $contactnoErr = $addressErr = $password1Err = "";
$name = $username = $birth = $email = $password = $contactno = $address = $password1= "";
$validateStatus = 1;

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(empty($_POST["name"])){
        $nameErr = "Name is Required";
        $validateStatus = 0;
        // echo "Hello ";
    }
    else{
        $name = test_input($_POST["name"]);
        // echo "Hellooooooo";
    }

    if(empty($_POST["username"])){
        $usernameErr = "Username is Required!";
        $validateStatus = 0;
    }
    else{
        $username = test_input($_POST[$username]);
        // echo "3";
    }

    if(empty($_POST["birth"])){
        $birthErr = "Birthday is Required!";
        $validateStatus = 0;
        // echo "4";
    }
    else{
        $birth = test_input($_POST["birth"]);
        // echo "5";
    }

    if(empty($_POST["contactno"])){
        $contactnoErr = "Contact No is requierd";
        $validateStatus = 0;
    }
    else{
        $contactno = test_input($_Post["contactno"]);
        // echo "6";

    }

    if(empty($_POST["password"])){
        $passwordErr = "Password is required"; 
        $validateStatus = 0;
    }
    else{
        $password = test_input($_Post["password"]);
        // echo "7";
    }

    if(empty($_POST["password1"])){
        $password1Err = "Confirm the password!";
        $validateStatus = 0;
    }
    else{
        $password1 = test_input($_POST["password1"]);
        // echo "8";
    }


//}




//Validation end

// $name = $_POST['name'];
// $username =$_POST['username'];
// $birth = $_POST['birth'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $contactno = $_POST['contactno'];
// $address = $_POST['address'];

if($validateStatus==1)
{
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
        header('location:../view/login.php');
    } 
    else {
        echo "Error: " . $reg . "<br>" . mysqli_error($con);
    }

    // echo "Registration Successful";
    // echo mysqli_num_rows($data);

 } 
}
else{
    echo"error";
}



?>
