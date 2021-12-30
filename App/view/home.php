<?php

    session_start();

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
            <img class="wadaklogo" src="/WADAK.com/App/assets/images/wadak.gif" alt="wadak gif"
                style="float:left width:5% height:5%">
            <nav>
                <ul class="navbar">
                    <?php
                        if(isset($_SESSION["user"]["userrole"])){?>
                    <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Post Jobs</a></li>
                    <?php
                    }
                    ?>
                    <li class="greenbar"><a href="jobs.php">Jobs</a></li>
                    <li><a href="/WADAK.com/App/view/services.php">Services</a></li>

                    <?php if(!isset($_SESSION["user"]["userrole"])){?>

                    <li><a href="./login.php">Login</a></li>
                    <?php }else {?>
                    <li><i class="far fa-bell"></i></li>
                    <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                    <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a></li>
                    <?php } ?>


                </ul>
            </nav>
        </header>



        <!-----------------x----------------Navigation-------------------x------------------>


        <!----------------------------------Slider------------------------------------------>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <!-- <div class="numbertext">1 / 3</div> -->
                <img src="/WADAK.com/App/assets/images/1.jpg" style="width:100%">
                <div class="text">
                    <h1 style="color:white">Welcome to WADAK Paradise!</h1>
                </div>
            </div>

            <div class="mySlides fade">
                <!-- <div class="numbertext">2 / 3</div> -->
                <img src="/WADAK.com/App/assets/images/2.jpg" style="width:100%">
                <div class="text">
                    <h1>Save Your Time! Be With Your Family!</h1>
                </div>
            </div>

            <div class="mySlides fade">
                <!-- <div class="numbertext">3 / 3</div> -->
                <img src="/WADAK.com/App/assets/images/3.jpg" style="width:100%">
                <div class="text">
                    <h1>Enjoy Every Single Moment!</h1>
                </div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <br>



        <!----------------------------------Slider------------------------------------------>



        <!----------------------------------section1--------------------------------------->
        <!------------------x--------------section1----------------------x---------------->




        <!----------------------------------section2--------------------------------------->
        <!-- <section>

            <div id="section2">
                <h1 id="servicecarousel">Our Services
                </h1>
                <div class="container">
                    <div class="owl-carousel owl-theme servicepost">
                        <div class="servicecontent">
                            <img src="./" alt="logo design image">

                            <div class="servicetitle">
                                <h3>Logo Design</h3>
                                <p>Meet Logo Professionals</p>
                                <button class="btn"></button>
                            </div>
                        </div>
                    </div>

                </div>
                <a href="#"><button id="button4">Post Job</button></a>
            </div>


        </section> -->

        <div class="services">
            <h1 id="servicecarousel">Our Services</h1>
            <div class="name">
                <div class="box1"><img src="image1.jfif" width="350px" height="200px">
                    <p>Software Development</p>
                </div>
            </div>
            <div class="name">
                <div class="box1"><img src="image2.png" width="350px" height="200px">
                    <p>Graphic Designing</p>
                </div>
            </div>
            <div class="name">
                <div class="box1"><img src="image3.jfif" width="350px" height="200px">
                    <p>Data Science</p>
                </div>
            </div>
            <div class="name">
                <div class="box1"><img src="image4.jpg" width="350px" height="200px">
                    <p>Data Entry</p>
                </div>
            </div>

        </div>

        <div class="button">
            <a href="/WADAK.com/App/view/postjob.php"><button id="button4">Post Job</button></a>
        </div>
        </div>








        <!------------------x--------------section2----------------------x---------------->

        <!----------------------------------section3--------------------------------------->

        <div class="container3">
            <h1 class="">TOP SERVICE PROVIDERS</h1>
            <div class="sectionheading3">
                <div class="name2">
                    <div class="box2"><img src="graphic.jpg" width="350px" height="200px">
                        <p>@username</p>
                    </div>
                </div>

                <div class="name2">
                    <div class="box2"><img src="data.jpg" width="350px" height="200px">
                        <p>@username</p>
                    </div>
                </div>

                <div class="name2">
                    <div class="box2"><img src="databasegirl.jpg" width="350px" height="200px">
                        <p>@username</p>
                    </div>
                </div>

                <div class="name2">
                    <div class="box2"><img src="it.jpg" width="350px" height="200px">
                        <p>@username</p>
                    </div>
                </div>

                <?php if(!isset($_SESSION["user"]["userrole"])){?>
                <a href="/WADAK.com/Implementation/view/registration.php"><button id="postbutton3">Register
                        Now</button></a>
                <?php }else {?>
                <a href="/WADAK.com/Implementation/view/catagorymain.html"><button id="postbutton3">View
                        Services</button></a>
                <?php } ?>
            </div>
        </div>




        <!------------------x--------------section3----------------------x---------------->

        <!----------------------------------footer--------------------------------------->

        <footer>
            <div class="container">
                <div class="col1">
                    <a href="#"><img class=" wadaklogo" src="wadak.gif" alt="wadak gif"></a>
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
                        <a href="/WADAK.com/App/view/askforad.php">
                            <li>Add Advertisement</li>
                        </a>
                        <a href="/WADAK.com/App/view/Q&A.php">
                            <li>Q&A</li>
                        </a>


                    </ul>
                </div>

                <div class="col2">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
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

    </body>

</html>
