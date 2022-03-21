<!Doctype HTML>
<html>

    <head>
        <title>View Co-admin </title>
        <style>
            a {
                text-decoration: none;
            }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/ViewCoAdmin.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <div id="mySidenav" class="sidenav">
            <p class="logo">WADAK <span class="menu">&#9776;</span></p>
            <p class="logo1"> <span class="menu1">&#9776;</span></p>
            <a href="/WADAK.com/App/view/home.php" class="icon-a"><i class="fa fa-home icons"></i> &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/App/view/Admin-dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Dashboard</a>
            <a href="/WADAK.com/App/view/CategoryUI.php" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Categories</a>
            <a href="/WADAK.com/App/view/ViewCoAdmin.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Co-Admin</a>
            <a href="/WADAK.com/App/view/ServiceProviderUI-admin.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Service
                Provider</a>
            <a href="#" class="icon-a"><i class="fa fa-bullhorn icons"></i> &nbsp;&nbsp;Advertisements</a>
            <a href="/WADAK.com/App/view/View Report.php" class="icon-a"><i class="fa fa-envelope icons"></i> &nbsp;&nbsp;Reports</a>
            <a href="/WADAK.com/App/view/PaymentUI.php" class="icon-a"><i class="fa fa-money icons"></i> &nbsp;&nbsp;Payments</a>
            <a href="#" class="icon-a"><i class="fa fa-object-group icons"></i> &nbsp;&nbsp;Request</a>
            <!--<a href="#"class="icon-a"><i class="fa fa-bell icons"></i> &nbsp;&nbsp;Notification</a>-->
        </div>

        <div id="main">
            <div class="head">
                <div class="col-div-1">
                    <p class="nav">CO-ADMIN</p>

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
                        <p>Admin Name <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                        <div class="profile-div">
                            <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="AdminProfile.html">Profile</a></p>
                            <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a href="Admin-dashboard.html">Dashboard</a>
                            </p>
                            <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;<a
                                    href="/WADAK.com/implementation/controller/logout.php">Log Out</a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
            <br />

            <div class="search-form">
                    <form action="" method="POST" >
                        <input type ="text" name ="SP_ID" placeholder="Enter User Id" class="text">
                        <input type ="submit" name ="search" placeholder="Search" value="Search" class="submit">
                    </form>
            </div>


            <div class="col-div-2">
                <div class="box">
                

                    <!--<form>
                        <table>
                            <tr>
                                <td>
                                    Co-Admin ID :
                                </td>
                                <td>
                                    <input type="search" placeholder=" ">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Name :
                                </td>
                                <td>
                                    <input type="text" placeholder=" ">
                                </td>
                            </tr>
                        </table>
                    </form> -->
                </div>
            </div>
            <div class="col-div-2">

                <div class="box1">
                    <a href="/WADAK.com/Implementation/view/coadmin.php">Add</a>
                </div>
                <div class="box2">
                    <a href="Admin-dashboard.html">View</a>
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
