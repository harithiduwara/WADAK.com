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
        <title>Post A Job</title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/postjob.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul style="margin-top: 1rem">
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php" target="_blank">Jobs</a> </li>
                <li><a href="/WADAK.com/App/view/services.php" target="_blank">Services</a> </li>
                <?php if(isset($_SESSION["user"]["userrole"])){?>
                <li><a href="/WADAK.com/App/view/messages.php" target="_blank">Messages</a> </li>
                <?php }?>
                <li><a href="/WADAK.com/App/view/userprofile.php" target="_blank">PROFILE</a> </li>
                <?php if(!isset($_SESSION["user"]["userrole"])){?>
                <li><a href="./login.php"></a></li>
                <?php }else {?>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a>
                </li>
                <?php } ?>
                <div class="animation "></div>
            </ul>
        </nav>
        <div class="postcontainer" style="height:85vmin">
            <div class="inputcontainer" id="loginbox" style="margin-left: 15vw; margin-top: 5% ;height:70vmin">

            </div>
        </div>
        </div>
    </body>

</html>
