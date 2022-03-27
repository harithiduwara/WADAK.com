<?php

    session_start();

    $uid = $_SESSION["user"]['uid'];

    // var_dump($_SESSION["user"]['uid']);

    $con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
    
    if(!$con){
        die("Connection failed" . mysqli_connect_error());
    }
    $query = "SELECT * FROM register WHERE uid=$uid";
    $data = mysqli_query($con, $query);
    $userData = mysqli_fetch_assoc($data);

?>

<!Doctype HTML>
<html>

    <head>
        <title>User Dashboard</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/Admin-dashboard.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/profile.css" type="text/css" />
    </head>


    <body>
        <!-- <?= $uid ?> -->
        <div id="mySidenav" class="sidenav">
            <p class="logo">WADAK <span class="menu">&#9776;</span></p>

            <a href="/WADAK.com/App/view/home.php" class="icon-a"><i class="fa fa-home icons"></i>
                &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/App/view/hirepersondashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Dashboard</a>
            <a href="/WADAK.com/App/view/postapplications.php" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Received Applications</a>
            <a href="/WADAK.com/App/view/postapplicationsSent.php" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Sent Post Applications</a>
                
            <a href="/WADAK.com/App/view/joborders.php?postType=job" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Job Posts</a>
            <a href="/WADAK.com/App/view/previousordershireperson.php?postType=job" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Previous Orders</a>
            <a href="/WADAK.com/App/view/joborders.php?postType=service" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Service Posts</a>
            <a href="/WADAK.com/App/view/previousordershireperson.php?postType=service" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Previous Services</a>
            <a href="/WADAK.com/App/view/news2.php" Target="_blank" class="icon-a"><i class="far fa-envelope-open"></i>
                &nbsp;&nbsp;News</a>
            <a href="/WADAK.com/App/view/messages.php" Target="_blank" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Messages</a>
            <!-- <a href="/WADAK.com/App/view/a.php" Target="_blank" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Achievements</a> -->
            <!-- <a href="/WADAK.com/App/view/complain.php" Target="_blank" class="icon-a"><i
                    class="fa fa-dashboard icons"></i> -->
                <!-- &nbsp;&nbsp;Complains</a> -->
            <a href="/WADAK.com/App/view/leaderboard.php" Target="_blank" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Leaderboard</a>
            <!-- <a href="/WADAK.com/App/view/askad.php" Target="_blank" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Advertisements</a> -->
            <a href="/WADAK.com/App/view/userProfileUpdate.php" Target="_blank" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Update Profile</a>
        </div>
        <div id="main">
            <div class="head">
                <div class="col-div-6">
                    <p class="nav"> Dashboard</p>
                </div>

                <div class="col-div-6">
                    <i class="fa fa-bell noti-icon"></i>
                    <div class="notification-div">
                        <p class="noti-head">Notification </p>
                        <hr class="hr" />
                        <p>You have new report
                            <span>alert </span>
                        </p>
                    </div>

                    <div class="profile">

                        <p>
                            <?= $userData["username"] ?> <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i>
                        </p>

                        <div class="profile-div">
                            <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a
                                    href="/WADAK.com/App/view/userprofile.php?uid=<?= $userData["uid"] ?>">Profile</a>
                            </p>

                            <p><i class="fa-duotone fa-arrow-right-from-bracket"></i> &nbsp;&nbsp; <a
                                    href="/WADAK.com/App/controller/logout.php">Log
                                    out</a>
                            </p>


                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
            <br />
            <div class="col-div-12">
                <div class="box8" style="text-align:center">
                    <?php 
                        $starQuery = "SELECT * FROM star_rating where jobid = (SELECT jobid FROM postjob)";
                    ?>
                    <h1 style="color:green; font-size:5rem">LEADERBOARD</h1>
                    <h2>Reviews : 1000</h2>
                    <h2>Stars : 4.7</h2>
                    <h2>Rank : 5</h2>
                </div>
            </div>
        <div class="clearfix"></div>
        <br />
        <div class="col-div-12">
            <div class="box-8">
                <div class="content-box" >
                    
                    
                    <table style="width:78vw">
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Contact</th>
                            <th>Email</th>
                        </tr>
                        <tr>
                            <th><?=$userData["name"]?></th>
                            <th><?=$userData["username"]?></th>
                            <th><?=$userData["contactno"]?></th>
                            <th><?=$userData["email"]?></th>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(".menu").click(function() {
            $("#mySidenav").css('width', '70px');
            $("#main").css('margin-left', '70px');
            $(".logo").css('display', 'none');
            $(".logo1").css('display', 'block');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icon-a").css('height', '25px');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".menu1").css('display', 'block');
            $(".menu").css('display', 'none');
        });

        $(".menu1").click(function() {
            $("#mySidenav").css('width', '300px');
            $("#main").css('margin-left', '300px');
            $(".logo").css('visibility', 'visible');
            $(".logo").css('display', 'block');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".menu").css('display', 'block');
            $(".menu1").css('display', 'none');
        });
        </script>
        <script>
        $(document).ready(function() {
            $(".profile p").click(function() {
                $(".profile-div").toggle();

            });
            $(".noti-icon").click(function() {
                $(".notification-div").toggle();
            });
        });
        </script>
    </body>

</html>
