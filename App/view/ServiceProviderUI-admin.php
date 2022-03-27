<!Doctype HTML>
<html>

    <head>
        <title>Service Provider</title>
        <style>
            a {
                text-decoration: none;
            }
            
        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/ServiceProviderUI-admin.css" type="text/css" />
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
            <a href="/WADAK.com/App/view/coadmin.php" class="icon-a"><i class="fa fa-users icons"></i>
                &nbsp;&nbsp;Co-Admin</a>
            <a href="/WADAK.com/App/view/ServiceProviderUI-admin.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Service
                Provider</a>
            <a href="ads.php" class="icon-a"><i class="fa fa-bullhorn icons"></i> &nbsp;&nbsp;Advertisements</a>
            <a href="/WADAK.com/App/view/View Report.php" class="icon-a"><i class="fa fa-envelope icons"></i> &nbsp;&nbsp;Reports</a>
            <a href="/WADAK.com/App/view/PaymentUI.php" class="icon-a"><i class="fa fa-money icons"></i> &nbsp;&nbsp;Payments</a>
            <a href="/WADAK.com/App/view/lead.php" class="icon-a"><i
                    class="fa fa-object-group icons"></i>
                &nbsp;&nbsp;Leaderboard</a>
            <!--<a href="#"class="icon-a"><i class="fa fa-bell icons"></i> &nbsp;&nbsp;Notification</a>-->
        </div>


        <div id="main">
            <div class="head">
                <div class="col-div-1">
                    <p class="nav">Service Provider</p>

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
                            <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="AdminProfile.php">Profile</a></p>
                            <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a href="Admin-dashboard.php">Dashboard</a>
                            </p>
                            <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;<a
                                    href="/WADAK.com/App/controller/logout.php">Log Out</a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
            <br />

            <div class="search-form">
                <form action="" method="GET">
                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="text" placeholder="Search data">
                        <button type="submit" class="submit" placeholder="Search">Search</button>
                </form>
            </div>

            <br>

            <div class="col-div-2">
                <div class="box">
                    <p class="head-1">Service Provider - Details</p>


            <!-- View Service providers -->
            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Service Provider Name</th>
                                    <th>Username</th>
                                    <th>User Id</th>
                                    <th>Email</th>
                                    <th>Contat No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include_once 'cataconfig.php';

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $result = "SELECT * FROM register WHERE CONCAT(name,username,uid,email,contactno) LIKE '%$filtervalues%' AND userrole='user1'";
                                        $query_run = mysqli_query($conn, $result);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $row['name']; ?></td>
                                                    <td><?= $row['username']; ?></td>
                                                    <td><?= $row['uid']; ?></td>
                                                    <td><?= $row['email']; ?></td>
                                                    <td><?= $row['contactno']; ?></td>
                                                    <td><div class="del-button"><a href="/WADAK.com/App/model/deletesp-admin.php?id=<?= $row['uid']; ?>">Remove</a></div></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td >No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
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
