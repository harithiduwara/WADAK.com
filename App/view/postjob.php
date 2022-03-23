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
                <li><a href="/WADAK.com/App/view/jobs.php">Jobs</a> </li>
                <li><a href="/WADAK.com/App/view/services.php">Services</a> </li>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a> </li>
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
            <div class="inputcontainer" id="inputbox" style="margin-left: 15vw; margin-top: 7vh; height:65vmin">
                <div class="form" style="text-align: center; margin-left: 6rem">

                    <form action="/WADAK.com/App/controller/postjob.php" method="post" enctype="multipart/form-data">

                        <div class="inputbox">
                            <span>Title</span>
                            <input type="text" name="title" placeholder="Enter Your Title" required>
                        </div>
                        <div class="inputbox">
                            <span>DESCRIPTION</span>
                            <input id="des" type="text" name="description" placeholder="Enter Your Description"
                                required>
                        </div>
                        <div class="inputbox">
                            <span>Post Type</span>
                            <select id="postType" name="postType" required>
                                <option value="job">Job Post</option>
                                <option value="service">Service Post</option>
                            </select>
                        </div>
                        <div class="inputbox">
                            <span>Category</span>
                            <select id="jobs" name="joblist" required>
                                <option value="webdev">Web Development</option>
                                <option value="uidev">UI Design</option>
                                <option value="logo">Logo Design</option>
                                <option value="graphic">Graphic Design</option>
                                <option value="app">App Development</option>
                                <option value="app">Other</option>
                            </select>
                        </div>


                        <label for="img">Select image: </label>
                        <input type="file" id="fileToUpload" name="fileToUpload" accept="image/*">



                        <div class="inputbox">
                            <span>Price</span>
                            <input type="number" name="price" min="1000" step="any">
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
