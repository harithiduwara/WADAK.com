<?php
require "../libs/send_email.php";

session_start();

$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');

if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}
$show_otp_field = false;

if (isset($_POST['email']) && !isset($_POST["otp"])) {
    $otp = rand(10000, 99999);
    sendEmail($_POST["email"], "Password Reset", " Use Code $otp to reset password");
    $_SESSION['otp'] = $otp;
    $show_otp_field = true;
} else if (isset($_POST["otp"])) {
    if ($_POST["otp"] == $_SESSION['otp']) {
        $password = $_POST["password"];
        $email = $_POST["email"];
        $sql = "UPDATE register set password = '$password' where email = '$email'";
        mysqli_query($con, $sql);
    } else {
        echo "Invalid OTP";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <style>
        a {
            text-decoration: none;
        }
    </style>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="/WADAK.com/App/assets/css/forgot%20password.css">
</head>

<body>

    <nav>
        <a href="/WADAK.com/App/view/home.php"><label class="logo">WADAK</label></a>
        <ul class="navbar">
            <?php
            if (isset($_SESSION["user"]["userrole"])) { ?>
                <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
            <?php
            }
            ?>
            <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
            <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

            <?php if (!isset($_SESSION["user"]["userrole"])) { ?>

                <li><a href="./login.php">Login</a></li>
            <?php } else { ?>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a></li>
            <?php } ?>


        </ul>
    </nav>
    <div class="loginContainer" style="width:100vw; height:95vh; ">
        <div class="inputContainer" style="margin-left:5vw; margin-top:15vh">
            <div class="form">
                <h2>Reset your password</h2>
                <form action="" method="post">
                    <div class="inputbox" style="width:-webkit-fill-available">
                        <input type="email" name="email" placeholder="Enter your email address" value="<?= $_POST['email'] ?>" <?= isset($_POST['email']) ? 'style="display:none"' : '' ?>>
                    </div>
                    <?php if ($show_otp_field) { ?>
                        <div class="inputbox" style="width:-webkit-fill-available">
                            <input type="number" name="otp" placeholder="ENTER OTP">
                        </div>
                        <div class="inputbox" style="width:-webkit-fill-available">
                            <input type="password" name="password" placeholder="Enter New Password">
                        </div>
                    <?php } else { ?>
                        <p>We'll send you an email.</p>
                        <p>After Log in, <b>you need to change your password</b></p>
                    <?php } ?>
                    <div class="inputbox">
                        <button>Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>