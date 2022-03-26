<?php

session_start();


$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');

if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}

$query = "select * from postjob , register where register.uid = postjob.uid and (title like '%" . $_GET["search"] . "%' or description like '%" . $_GET["search"] . "%')";

$data = mysqli_query($con, $query);

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wadak.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/WADAK.com/App/assets/css/home.css">

    <link rel="stylesheet" href="/WADAK.com/App/view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/WADAK.com/App/view/css/owl.theme.default.min.css">

    <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
</head>

<body>


    <!----------------------------------Navigation-------------------------------------->
    <header>
        <a href="/WADAK.com/App/view/home.php"> <label style=" color: green;
                                                                    font-size: 2rem;
                                                                    line-height: 80px;
                                                                    padding: 0 100px;
                                                                    font-weight: bold;">WADAK</label></a>
        <nav>
            <ul class="navbar">
                <?php
                if (isset($_SESSION["user"]["userrole"])) { ?>
                    <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
                <?php
                }
                ?>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

                <?php if (!isset($_SESSION["user"]["userrole"])) { ?>

                    <li><a href="./login.php">Login</a></li>
                <?php } else { ?>
                    <li><i class="far fa-bell"></i></li>
                    <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                    <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a></li>
                <?php } ?>


            </ul>

            <!-- <ul>Hello
                    <?php //echo $_SESSION["user"]["username"] 
                    ?>
                </ul> -->
        </nav>
    </header>



    <!-----------------x----------------Navigation-------------------x------------------>


    <!----------------------------------Slider------------------------------------------>

    <div class="slideshow-container">

        <div class="mySlides fade">

            <img src="/WADAK.com/App/assets/images/1.jpg" style="width:100%; object-fit: cover">
            <div class="text">
                <h1 style="color:white">Welcome to WADAK Paradise!</h1>
            </div>
        </div>

        <div class="mySlides fade">

            <img src="/WADAK.com/App/assets/images/2.jpg" style="width:100%">
            <div class="text">
                <h1>Save Your Time! Be With Your Family!</h1>
            </div>
        </div>

        <div class="mySlides fade">

            <img src="/WADAK.com/App/assets/images/3.jpg" style="width:100%">
            <div class="text">
                <h1>Enjoy Every Single Moment!</h1>
            </div>
        </div>

    </div>
    <br>


    <br>



    <!----------------------------------Slider------------------------------------------>



    <!----------------------------------section1--------------------------------------->
    <!------------------x--------------section1----------------------x---------------->




    <!----------------------------------section2--------------------------------------->


    <div class="container3">
        <h1 class="">TOP SERVICE CATAGORIES </h1>

        <div style="display:grid; grid-template-columns: 1fr 1fr 1fr 1fr; grid-gap:1rem; height: 40vmin;
                overflow: hidden">

            <?php
            if (mysqli_num_rows($data) > 0) {
                for ($x = 0; $x <= 3 && $row = mysqli_fetch_assoc($data); $x++) {
            ?>
                    <div class=" sectionheading3">
                        <div class="card1" style="margin:1rem; background-color: rgb(248, 248, 248); padding: 0.5rem 0.5rem 0.5rem 0.5rem">
                            <img src="
                    <?php
                    if ($row["filename"] == null) {
                        echo "/WADAK.com/App/uploads/noimage.jpg";
                    } else {
                        echo $row["filename"];
                    }
                    ?>
                
                
                " alt="service" style="width:100% ; height:200px; object-fit: cover;">
                            <a href="/WADAK.com/App/view/userprofile.php?uid=<?= $row["uid"] ?>">
                                <p style="text-align:end">
                                    <?= $row["username"] ?>
                                </p>
                            </a>

                            <a href="/WADAK.com/App/view/jobpostview.php?jobid=<?= $row["jobid"] ?>">
                                <h3 style="text-align:center"><?= $row["title"] ?>
                                </h3>
                            </a>
                            <br>
                            <a href="/WADAK.com/App/view/jobpostview.php?jobid=<?= $row["jobid"] ?>">
                                <p style="text-align: center"><?= $row["description"] ?></p><br>
                                <p>
                            </a>

                            </p>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>





        <!------------------x--------------section2----------------------x---------------->

        <!----------------------------------section3--------------------------------------->

        <div class="container3" style="margin-top: 2rem">
            <h1 class="">TOP SERVICE PROVIDERS</h1>

            <div style="display:grid; grid-template-columns: 1fr 1fr 1fr 1fr; grid-gap:1rem; height: 40vmin;
                overflow: hidden">

                <?php
                if (mysqli_num_rows($data) > 0) {
                    for ($x = 0; $x <= 3 && $row = mysqli_fetch_assoc($data); $x++) {
                ?>
                        <div class="sectionheading3">
                            <div class="card1" style="margin:1rem; background-color: rgb(248, 248, 248); padding: 0.5rem 0.5rem 0.5rem 0.5rem">
                                <a href="/WADAK.com/App/view/jobpostview.php?jobid=<?= $row["jobid"] ?>">
                                    <img src="
                                    <?php
                                    if ($row["filename"] == null) {
                                        echo "/WADAK.com/App/uploads/noimage.jpg";
                                    } else {
                                        echo $row["filename"];
                                    }
                                    ?>
                
                
                " alt="service" style="width:100% ; height:200px; object-fit: cover;">

                                </a>

                                <a href="/WADAK.com/App/view/userprofile.php?uid=<?= $row["uid"] ?>">
                                    <p style="text-align:end">
                                        <?= $row["username"] ?>
                                    </p>
                                </a>

                                <a href="/WADAK.com/App/view/jobpostview.php?jobid=<?= $row["jobid"] ?>">
                                    <h3 style="text-align:center"><?= $row["title"] ?>
                                    </h3>
                                </a>
                                <br>
                                <a href="/WADAK.com/App/view/jobpostview.php?jobid=<?= $row["jobid"] ?>">

                                    <p style="text-align: center"><?= $row["description"] ?></p><br>
                                    <p>
                                    </p>
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <!-- ------------------------------------------------------------------------------------ -->

            <?php if (!isset($_SESSION["user"]["userrole"])) { ?>
                <a href=" /WADAK.com/App/view/registration.php"><button id="postbutton3">Register
                        Now</button></a>
            <?php } else { ?>
                <a href="/WADAK.com/App/view/catagorymain.php"><button id="postbutton3">View
                        Services</button></a>
            <?php } ?>
        </div>
    </div>

    <br>


    <!------------------x--------------section3----------------------x---------------->

    <!----------------------------------footer--------------------------------------->

    <footer>
        <div class="container">
            <div class="col1">
                <a href="#"><img class=" wadaklogo" src="/WADAK.com/App/assets/images/wadak.gif" alt="wadak gif"></a>
                <ul>
                    <a href="/WADAK.com/App/view/terms&conditions.php">
                        <li>Terms & Condition</li>
                    </a>
                    <a href="/WADAK.com/App/view/privacy.php">
                        <li>Privacy Policy</li>
                    </a>
                    <a href="/WADAK.com/App/view/aboutus.php">
                        <li>About us</li>
                    </a>
                    <a href="/WADAK.com/App/view/askad.php">
                        <li>Add Advertisement</li>
                    </a>
                    <a href="/WADAK.com/Implementation/forum">
                        <li>Community Forum</li>
                    </a>
                    <a href="/WADAK.com/App/view/Q&A.php">
                        <li>Q&A</li>
                    </a>


                </ul>
            </div>

            <div class="col2">
                <ul>
                    <li><a href="https://www.facebook.com/wadakcom" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    <li><i class="fab fa-instagram-square"></i></li>
                    <li><i class="fab fa-linkedin"></i></li>
                    <li><i class="fab fa-twitter-square"></i></li>
                </ul>

            </div>

            <div class="col3">
                <h1>Stay Connected!</h1>
                <p>Subscribe for the news letter</p>

                <form action="#" class="formnews">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email"><br>
                    <label for="fname">First Name</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Last Name</label><br>
                    <input type="text" id="lname" name="lname"><br>
                    <input id="submitnews" type="submit" value="Submit">
                </form>
            </div>

        </div>
    </footer>
    <!------------------x--------------footer----------------------x---------------->

    <div class="copyrights">
        <p><a href="#" target="_blank">Powered by Group18</a></p>
    </div>





    <script src="/WADAK.com/App/assets/js/Jquery3.4.1.min.js"></script>
    <script src="/WADAK.com/App/assets/js/home.js"></script>
    <script src="/WADAK.com/App/assets/js/owl.carousel.min.js"></script>
    <!-- Testing -->
</body>

</html>