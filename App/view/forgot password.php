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
                    if(isset($_SESSION["user"]["userrole"])){?>
                <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
                <?php
                    }
                    ?>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

                <?php if(!isset($_SESSION["user"]["userrole"])){?>

                <li><a href="./login.php">Login</a></li>
                <?php }else {?>
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
                    <form>
                        <div class="inputbox" style="width:-webkit-fill-available">
                            <input type="password" placeholder="Enter your email address">
                        </div>
                        <p>We'll send you an email.</p>
                        <p>After Log in, <b>you need to change your password</b></p>
                        <div class="inputbox">
                            <a href="home.php" class="button"> Continue</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>
