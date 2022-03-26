<?php
session_start();

require_once("dbconfig.php");
if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $file = $_FILES['file'];

    //print_r($file);
    //echo "<br>";

    $imagefilename = $file['name'];
    // print_r($imagefilename);
    //echo "<br>";

    $imageerror = $file['error'];
    //print_r($imageerror);
    //echo "<br>";

    $imagetmp = $file['tmp_name'];
    //print_r($imagetmp);
    // echo "<br>";

    $fn = explode('.', $imagefilename);
    //print_r($fn);
    //echo "<br>";

    $fe = strtolower($fn[1]);
    // print_r($fe);
    //echo "<br>";

    $extension = array('jpeg', 'jpg', 'png');
    if (in_array($fe, $extension)) {
        $ui = 'images/' . $imagefilename;
        move_uploaded_file($imagetmp, $ui);
    }

    $Co_AdminId = 1;
    $sql = "INSERT INTO advertisement(user_id,description,type,image,Co_Admin_Id) VALUES ('$id','$description','$email','$ui',$Co_AdminId)";
    mysqli_query($connection, $sql);
    // $to = 'lasanthiwathsala473@gmail.com';
    // $email_subject = 'Payment receipt';
    // $email_body = 'Your payment has sucessfully received';
    // $email_body .= '<b> ID : </b> {$id} <br>';
    // $email_body .= '<b> Description : </b> {$description} <br>';
    // $email_body .= '<b> Type : </b> {$type} <br>';
    // $email_body .= '<b> File : </b> {$file} <br>';

    // $header = "From:{$to}\r\ncontent-Type: text/html;";


    // mail($type, $email_subject, $email_body, $header);

    //header("Implementation\view\addac.php?messege=1");
    //header('location:/WADAK.com/App/view/adddis.php');
    // exit();

} else {
    header('location:/WADAK.com/App/view/home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Ad pay handle</title>
</head>

<body>
    <form id="myForm" method="post" action="https://sandbox.payhere.lk/pay/checkout">
        <input type="hidden" name="merchant_id" value="1219969"> <!-- Replace your Merchant ID -->
        <input type="hidden" name="return_url" value="http://localhost/WADAK.com/App/view/adddis.php">
        <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
        <input type="hidden" name="notify_url" value="http://sample.com/notify">
        <!-- <br><br>Item Details<br> -->

        <?php
        // $servername = "localhost";
        // $username = "toor";
        // $password = "toor";
        // $database = "wadak";

        // $connection = mysqli_connect($servername, $username, $password, $database);

        // // Check connection
        // if (mysqli_connect_errno()) {
        //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
        //     // exit();
        // }


        // $sql = "SELECT Ad_no FROM advertisement";
        // $result = mysqli_query($connection, $sql);
        // require_once("dbconfig.php");
        // $sql = "SELECT Ad_no FROM advertisement";
        // $result = mysqli_query($connection, $sql);
        // print_r($result);

        ?>

        <input type="hidden" name="order_id" value="<?php echo "1" //$result 
                                                    ?>">
        <input type="hidden" name="items" value="Advertisement"><br>
        <input type="hidden" name="currency" value="LKR">
        <input type="hidden" name="amount" value="500">
        <!-- <br><br>Customer Details<br> -->
        <input type="hidden" name="first_name" value="<?php echo $_SESSION['user']['username'] ?>">
        <input type="hidden" name="last_name" value="Vithanage"><br>
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="phone" value="0771234567"><br>
        <input type="hidden" name="address" value="No.1, Galle Road">
        <input type="hidden" name="city" value="Colombo">
        <input type="hidden" name="country" value="Sri Lanka">
    </form>

    <script type="text/javascript">
        document.getElementById('myForm').submit();
    </script>


</body>

</html>