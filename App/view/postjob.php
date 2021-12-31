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
                <li><a href="jobs.php">Jobs</a> </li>
                <li><a href="services.php">Services</a> </li>
                <li><a href="messages.html">Messages</a> </li>
                <?php if(!isset($_SESSION["user"]["userrole"])){?>
                <li><a href="./login.php"></a></li>
                <?php }else {?>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a>
                </li>
                <?php } ?>
                <div class="animation "></div>
            </ul>
        </nav>
        <div class="postcontainer">
            <div class="inputcontainer" id="loginbox">
                <div class="form">

                    <form action="/WADAK.com/App/controller/postjob.php" method="post">
                        <div class="inputbox">
                            <span>Title</span>
                            <input type="text" name="title" placeholder="Enter Your Job Title" required>
                        </div>
                        <div class="inputbox">
                            <span>DESCRIPTION</span>
                            <input id="des" type="text" name="description" placeholder="Enter Your Description"
                                required>
                        </div>
                        <div class="inputbox">
                            <span>Category</span>
                            <select id="jobs" name="joblist" required>
                                <option value="webdev">Web Development</option>
                                <option value="uidev">UI Design</option>
                                <option value="logo">Logo Design</option>
                                <option value="graphic">Graphic Design</option>
                                <option value="app">App Development</option>
                            </select>
                        </div>


                        <label for="img">Select image: </label>
                        <input type="file" id="img" name="img" accept="image/*">

                        <div class="inputbox">
                            <span>Price</span>
                            <input type="number" name="price" min="5" step="any" />
                        </div>

                        <div class="inputbox">

                            <input type="submit" value="POST">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>
