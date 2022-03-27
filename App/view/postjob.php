<?php 
session_start();

$postType = $_GET["postType"]??"job";

$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
if(!$con){
    die("Connection failed" . mysqli_connect_error());
}

    $query = "SELECT * FROM `jobCategories`";

    $data = mysqli_query($con, $query);


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
        <title>Add Post</title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/postjob.css">
        <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
    </head>

    <body>



        <nav>
            <a href="/WADAK.com/App/view/home.php"> <label class="logo">WADAK</label></a>
            <ul style="margin-top: 1rem">
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

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
                                <?php
                                    if (mysqli_num_rows($data) > 0) {

                                    while($row = mysqli_fetch_assoc($data)) {
          
                                    ?>
                                <option value="<?=$row["categoryId"]?>">
                                    <?=$row["categoryName"]?>
                                </option>
                                <?php
                                }
                                }
                                ?>


                                <option value="other">Other</option>
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
