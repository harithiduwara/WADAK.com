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
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/login.css">
    </head>

    <body>

        <nav>
            <a href=" /WADAK.com/App/view/home.php"> <label class=" logo">WADAK</label></a>
            <ul style="margin-top: 1rem">
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php">Jobs</a> </li>
                <li><a href="/WADAK.com/App/view/services.php">Services</a> </li>
                <li><a href="/WADAK.com/App/view/registration.php">Register</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>
        <div class="loginContainer">
            <div class="inputContainer" id="loginbox">
                <div class="form">

                    <form action="/WADAK.com/App/controller/validation.php" method="post">
                        <div class="inputbox">
                            <input type="text" name="username" placeholder="Enter Username" required>
                        </div>
                        <div class="inputbox">
                            <input type="password" name="password" placeholder="Enter Password" required>
                        </div>
                        <label class="remember"><input type="checkbox">Remember Me</label>
                        <div class="inputbox">
                            <input type="submit" value="Login">
                        </div>
                    </form>

                    <p><a href="/WADAK.com/App/view/forgot password.php">Forgotten your Username or Password?</a></p>
                    <p><a href="./registration.php">Create an Account</a></p>
                </div>
            </div>
        </div>
    </body>

</html>
