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
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/categorymain.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/navigationBar.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/toggle.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/owl.theme.default.min.css">

        <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
    </head>

    <body>


        <!----------------------------------Navigation-------------------------------------->
        <header>

            <a href="home.php"><img class="wadaklogo" src="/WADAK.com/App/assets/images/wadak.gif" alt="wadak gif"
                    style="float:left ;width:5rem; height:5%;"></a>
            <nav>
                <ul class="navbar">
                    <?php
                                    if(isset($_SESSION["user"]["userrole"])){?>
                    <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Post Jobs</a></li>
                    <?php
                                }
                                ?>
                    <li class="greenbar"><a href="jobs.php">Jobs</a></li>
                    <!-- <li><a href="/WADAK.com/Implementation/view/services.php">Services</a></li> -->

                    <?php if(!isset($_SESSION["user"]["userrole"])){?>

                    <li><a href="./login.php">Login</a></li>
                    <?php }else {?>
                    <li><i class="far fa-bell"></i></li>
                    <li><a href="/WADAK.com/App/view/messages.html">Messages</a></li>
                    <li><a href="/WADAK.com/App/view/hirepersondashboard.html"><i class="fas fa-user"></i></a></li>
                    <?php } ?>


                </ul>
            </nav>

        </header>



        <!-----------------x----------------Navigation-------------------x------------------>


        <!-------------------------------------searchbar------------------------------------->



        <div class="topnav">

            <a href="#about"></a>
            <a href="#contact"></a>
            <a class="active" href="#"></a>
            <label class="switch">
                <input type="checkbox">
                <span class="sliderround"></span>
            </label>
            <input type="text" placeholder="Find Service..">
        </div>


        <!------------------x------------------searchbar-------------------x----------------->



        <!-------------------------------------boxes--------------------------------------------->


        <!-------------------x------------------boxes------------------------x------------------->

        <!----------------------------------footer--------------------------------------->


        <!--new code -->
        <!--first row-->
        <div class="row">
            <div class="column">
                <div class="card1"><img src="code.png" alt="service" style="width:100% ; height:200px">
                    <h9 style=" margin-right:1000px">@username</h9>
                    <h3>Title</h3><br>
                    <p>I will code program or buld applications in java</p><br>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>

            <div class="column">
                <div class="card1"><img src="download.jpg" alt="service" style="width:100%; height:200px">
                    <h9 style=" margin-right:1000px">@username</h9>
                    <h3>Title</h3><br>
                    <p>I will write code in c or c++ and build applications</p><br>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>

            <div class="column">
                <div class="card1"><img src="database.jpg" alt="service" style="width:100%; height:200px">
                    <h9 style=" margin-right:1000px">@username</h9>
                    <h3>Title</h3><br>
                    <p>I will create your databases erp CRM or management systems</p><br>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>

            <div class="column">
                <div class="card1"><img src="database.jpg" alt="service" style="width:100%; height:200px">
                    <h9 style=" margin-right:1000px">@username</h9>
                    <h3>Title</h3><br>
                    <p>I will create your databases erp CRM or management systems</p><br>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>
        </div>


        <!--second row-->
        <br><br><br><br><br><br><br><br><br>
        <div class="row">
            <div class="column">
                <div class="card1"><img src="code.png" alt="service" style="width:100% ; height:200px">
                    <h9 style=" margin-right:1000px">@username</h9>
                    <h3>Title</h3><br>
                    <p>I will code program or buld applications in java</p><br>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>

            <div class="column">
                <div class="card1"><img src="download.jpg" alt="service" style="width:100%; height:200px">
                    <h9 style=" margin-right:1000px">@username</h9>
                    <h3>Title</h3><br>
                    <p>I will write code in c or c++ and build applications</p><br>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>

            <div class="column">
                <div class="card1"><img src="database.jpg" alt="service" style="width:100%; height:200px">
                    <h9 style=" margin-right:1000px">@username</h9>
                    <h3>Title</h3><br>
                    <p>I will create your databases erp CRM or management systems</p><br>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>

            <div class="column">
                <div class="card1"><img src="database.jpg" alt="service" style="width:100%; height:200px">
                    <h9 style=" margin-right:1000px">@username</h9>
                    <h3>Title</h3><br>
                    <p>I will create your databases erp CRM or management systems</p><br>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>
        </div>






        <div class="footer">
            <div class="container">
                <div class="col1">
                    <a href="#"><img class=" wadaklogo" src="/WADAK.com/App/assets/images/wadak.gif"
                            alt="wadak gif"></a>
                    <ul>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Terms & Condition</a></li>
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
            <div class="copyrights">
                <p><a href="#" target="_blank">Powered by Group18</a></p>
            </div>

        </div>

        <!------------------x--------------footer----------------------x---------------->






        <script src="./js/Jquery3.4.1.min.js"></script>
        <script src="./js/home.js"></script>
        <script src="./js/owl.carousel.min.js"></script>

    </body>


</html>
