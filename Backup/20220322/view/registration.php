<!DOCTYPE html>
<html lange="en" dir="Itr">

    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/registration.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/job post.php">Jobs</a> </li>
                <li><a href="/WADAK.com/App/view/services.php">Services</a> </li>
                <li><a href="/WADAK.com/App/view/leaderboard.php">Leaderboard</a> </li>
                <li><a href="/WADAK.com/App/view/login.php">Login</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>



        <div class="container">
            <div class="title">
                <h4>Registration</h4>
            </div><br>

            <form action="/WADAK.com/Implementation/controller/registration.php" method="post">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text" name="name" placeholder="Enter your first name" required>

                    </div>

                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" placeholder="Enter your last name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="date" name="birth" placeholder="Date of birth" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="address" placeholder="Enter your address" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email Address</span>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Contact No</span>
                        <input type="tel" name="contactno" placeholder="Enter your phone number" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Repeat Password</span>
                        <input type="password" name="password1" placeholder="Re-enter your password" required>
                    </div>

                </div>


                <br><br>

                <br><input type="checkbox"> &nbsp;&nbsp; “I accept the Terms of Service” or “I accept the Privacy
                Statement” Click here to indicate that you have
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read and agree to the terms presented in the Terms and
                Conditions agreement. <br>

                <div class="ifhaveaccount">
                    <span>Already have an account? <a href="./login.php" id="ifhaveaccount">Login</a></span>
                </div>

                <div class="button" id="btn">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
        </div>

    </body>

</html>