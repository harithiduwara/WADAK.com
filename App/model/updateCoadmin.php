<?php
require 'cataconfig.php';

if(isset($_POST['update'])){
    $uid = $_POST["uid"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $birthday = $_POST["birthday"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $contactno = $_POST["contactno"];
    $password = $_POST["password"];
    $userrole = $_POST["userrole"];

    $sql = "UPDATE `register` SET name = '$name', username = '$username', birthday = '$birthday', address = '$address', email = '$email', contactno = '$contactno', password = '$password' WHERE uid = '$uid' AND userrole = 'coadmin' ";

    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Successfully updated');
        window.location='/WADAK.com/App/view/coadmin.php';
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
