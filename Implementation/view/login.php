<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <title>Login</title>
        <link rel="stylesheet" href="./css/login.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul style="margin-top: 1rem">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Post Job</a> </li>
                <li><a href="#">Jobs</a> </li>
                <li><a href="#">Services</a> </li>
                <li><a href="#">Messages</a> </li>
                <li><a href="#">Login</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>
        <div class="loginContainer">
            <div class="inputContainer" id="loginbox">
                <div class="form">
                    <form action="../controller/validation.php" method="post">
                        <div class="inputbox">
                            <input type="text" placeholder="Enter Username">
                        </div>
                        <div class="inputbox">
                            <input type="password" placeholder="Enter Password">
                        </div>
                        <label class="remember"><input type="checkbox">Remember Me</label>
                        <div class="inputbox">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                    <p><a href="forgot%20password.html">Forgotten your Username or Password?</a></p>
                    <p><a href="./registration.php">Create an Account</a></p>
                </div>
            </div>
        </div>
    </body>

</html>
