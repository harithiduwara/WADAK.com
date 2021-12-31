<!Doctype HTML>
<html>

    <head>
        <title>Categories</title>
        <style>
            a {
                text-decoration: none;
            }

        </style>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/CategoryUI.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>

        <div id="mySidenav" class="sidenav">
            <p class="logo">WADAK <span class="menu">&#9776;</span></p>
            <p class="logo1"> <span class="menu1">&#9776;</span></p>
            <a href="/WADAK.com/Implementation/view/home.php" class="icon-a"><i class="fa fa-home icons"></i>
                &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/Implementation/view/hirepersondashboard.html" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Dashboard</a>
            <a href="/WADAK.com/Implementation/view/joborders.php" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Job Posts</a>
            <a href="/WADAK.com/Implementation/view/previousordershireperson.html" class="icon-a"><i
                    class="fa fa-tasks icons"></i> &nbsp;&nbsp;Previous Orders</a>

            <a href="/WADAK.com/Implementation/view/previousorders.html" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Service Posts</a>
            <a href="/WADAK.com/Implementation/view/previousorders.html" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Previous Services</a>
            <a href="/WADAK.com/Implementation/view/news2.php" class="icon-a"><i class="far fa-envelope-open"></i>
                &nbsp;&nbsp;News</a>
            <a href="/WADAK.com/Implementation/view/messages.html" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Messages</a>
            <a href="/WADAK.com/Implementation/view/a.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Achievements</a>
            <a href="/WADAK.com/Implementation/view/leaderboard.html" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Leaderboard</a>
            <a href="/WADAK.com/Implementation/view/askforad.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Advertisements</a>
        </div>
        <div id="main">
            <div class="head">
                <div class="col-div-1">
                    <p class="nav">Previous Orders</p>

                </div>

                <div class="col-div-1">
                    <i class="fa fa-search search-icon"></i>

                    <i class="fa fa-bell noti-icon"></i>
                    <div class="notification-div">
                        <p class="noti-head">Notification </p>
                        <hr class="hr" />
                        <p>You have new report
                            <span>alert </span>
                        </p>
                    </div>

                    <div class="profile">
                        <p>Username <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                        <div class="profile-div">
                            <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="userProfile.html">Profile</a></p>
                            <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a
                                    href="hirepersondashboard.html">Dashboard</a>
                            </p>
                            <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;<a
                                    href="/WADAK.com/implementation/controller/logout.php">Log Out</a></p>

                            <?php
                                session_start();
                                unset($_SESSION["id"]);
                                unset($_SESSION["name"]);
                                header("Location:../view/login.php");
                            ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
            <br />

            <div class="col-div-2">
                <div class="box">
                    <p class="head-1">Order History</p>
                    <br />
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Job Title</th>
                            <th>Job Description</th>

                        </tr>

                        <tr>
                            <th>2021-10-10</th>
                            <th>Web Development</th>
                            <th>I can create responsive websites.</th>

                        </tr>

                        <tr>
                            <th>2021-10-12</th>
                            <th>Logo Design</th>
                            <th>I can create facinating logos.</th>

                        </tr>

                        <tr>
                            <th>2021-10-15</th>
                            <th>Web Development</th>
                            <th>I can create responsive websites.</th>

                        </tr>


                    </table>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

            $(".menu").click(function () {
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

            $(".menu1").click(function () {
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
            $(document).ready(function () {
                $(".profile p").click(function () {
                    $(".profile-div").toggle();

                });
                $(".noti-icon").click(function () {
                    $(".notification-div").toggle();
                });
            });
        </script>

    </body>

</html>