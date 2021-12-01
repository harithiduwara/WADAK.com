<!Doctype HTML>
<html>

    <head>
        <title>Hire Person Dashboard</title>
        <style>
            a {
                text-decoration: none;
            }

        </style>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/Admin-dashboard.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/profile.css" type="text/css" />
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
                    class="fa fa-tasks icons"></i> &nbsp;&nbsp;Previous Services</a>
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
                <div class="col-div-6">
                    <p class="nav"> Dashboard</p>
                </div>

                <div class="col-div-6">
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
                        <!--<img src="images/user.png" class="pro-img" /> -->
                        <p>User Name <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                        <div class="profile-div">
                            <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="userprofile.html">Profile</a></p>
                            <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a
                                    href="hirepersondashboard.html">Dashboard</a> </p>
                            <a href="/WADAK.com/Implementation/controller/logout.php"></i>
                                &nbsp;&nbsp;Log Out</a>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
            <br />



            <div class="clearfix"></div>
            <br />
            <div class="col-div-12">
                <div class="box-8">
                    <h1>Leaderboard</h1>
                    <h2>Reviews : 1000</h2>
                    <h2>Stars : 4.7</h2>
                    <h2>Rank : 5</h2>
                </div>
            </div>


            <div class="clearfix"></div>
            <br />
            <div class="col-div-12">
                <div class="box-8">
                    <div class="content-box">
                        <p>User details </p>
                        <br />
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Contact</th>
                                <th>Email</th>
                            </tr>
                            <tr>
                                <th>Harith Iduwara</th>
                                <th>Harith</th>
                                <th>0771223465</th>
                                <th>coad@gmail.com</th>
                            </tr>
                            <tr>
                                <th>Lasanthi Wathsala</th>
                                <th>Wathsala</th>
                                <th>0754249340</th>
                                <th>lasanthiwathsala473@gmail.com</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
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
