<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">

    <head>
        <meta charset="UTF-8">
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <title>Forgot password</title>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/forgot%20password.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/postjob.php">Post Job</a> </li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>>
                <li><a href="/WADAK.com/App/view/leaderboard.php">Leaderboard</a></li>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/App/view/chat.php">Messages</a> </li>
                <li><a href="/WADAK.com/App/controller/login.php">Login</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>
        <div class="loginContainer">
            <div class="inputContainer">
                <div class="form">
                    <h2>Reset your password</h2>
                    <form>
                        <div class="inputbox">
                            <input type="password" placeholder="Enter your email address or phone number">
                        </div>
                        <p>We'll send you the Username and Password of your account.</p>
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
