<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <title>Apply Service</title>
        <link rel="stylesheet" href="./css/message.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul style="margin-top: 1rem">
                <li><a href="/WADAK.com/Implementation/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/Implementation/view/postjob.html">Post Job</a> </li>
                <li><a href="jobs.php">Jobs</a> </li>
                <li><a href="services.php">Services</a> </li>
                <?php if(!isset($_SESSION["user"]["userrole"])){?>
                <li><a href="./login.php"></a></li>
                <?php }else {?>
                <li><a href="/WADAK.com/Implementation/view/hirepersondashboard.html"><i class="fas fa-user"></i></a>
                </li>
                <?php } ?>
                <div class="animation "></div>
            </ul>
        </nav>
        <div class="postcontainer">
            <div class="chat">
                <div class="leftbar">
                    <h1>USER</h1>
                </div>
                <div class="rightbar">
                    <h1>Hello</h1>
                </div>
            </div>

        </div>
    </body>

</html>
