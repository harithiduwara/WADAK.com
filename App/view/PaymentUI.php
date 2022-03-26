<!Doctype HTML>
<html>

    <head>
        <title>Payment</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css//PaymentUI.css" type="text/css" />
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
            <a href="/WADAK.com/App/view/CategoryUI.php" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Categories</a>
            <a href="/WADAK.com/App/view/coadmin.php" class="icon-a"><i class="fa fa-users icons"></i>
                &nbsp;&nbsp;Co-Admin</a>
            <a href="/WADAK.com/App/view/ServiceProviderUI-admin.php" class="icon-a"><i class="fa fa-users icons"></i>
                &nbsp;&nbsp;Service
                Provider</a>
            <a href="/WADAK.com/App/view/ads.php" class="icon-a"><i class="fa fa-bullhorn icons"></i>
                &nbsp;&nbsp;Advertisements</a>
            <a href="/WADAK.com/App/view/View Report.php" class="icon-a"><i class="fa fa-envelope icons"></i>
                &nbsp;&nbsp;Reports</a>
            <a href="/WADAK.com/App/view/PaymentUI.php" class="icon-a"><i class="fa fa-money icons"></i>
                &nbsp;&nbsp;Payments</a>
            <a href="/WADAK.com/App/view/lead.php" class="icon-a"><i class="fa fa-object-group icons"></i>
                &nbsp;&nbsp;Leaderboard</a>

        </div>


        <div id="main">
            <div class="head">
                <div class="col-div-1">
                    <p class="nav">Payments</p>

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
                                    href="/WADAK.com/App/controller/logout.php">Log Out</a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
            <br />

            </div>

            <?php include('dbconfig.php');?>

            <div class="col-div-4-1">
                <div class="box">
                    <p class="head-1" >Total Paid Advetisements</p>

                    <?php

                        $ad_query = "SELECT * FROM advertisement WHERE is_advanced_paid = 1 OR is_accepted = 1 ";
                        $ad_query_run = mysqli_query($connection,$ad_query);

                        if($ad_total = mysqli_num_rows($ad_query_run))
                        {
                            echo '<h2 align = center  style="margin-top:40px;color:#58655C;font-size:50px; font-weight:500"> '.$ad_total.' </h2>';
                        }
                        else{
                            echo '<h2 align = center  style="margin-top:40px;color:#58655C;font-size:35px; font-weight:500"> No Data </h2>';
                        }

                    ?>


                </div>
            </div>
            <div class="col-div-4-1">
                <div class="box">
                    <p class="head-1">Total Income</p>

                    <?php

                        $ad_query = "SELECT Ad_no, user_id, date  FROM advertisement WHERE is_advanced_paid = 1 OR is_accepted = 1 ";
                        $ad_query_run = mysqli_query($connection,$ad_query);

                        if($ad_total = mysqli_num_rows($ad_query_run))
                        {
                            $payment = 500;
                            $income = $ad_total*$payment;
                            echo '<h2 align = center  style="margin-top:40px;color:#58655C;font-size:45px; font-weight:500"> LKR '.$income.' </h2>';
                        }
                        else{
                            echo '<h2 align = center  style="margin-top:40px;color:#58655C;font-size:35px; font-weight:500"> No Data </h2>';
                        }

                    ?>

                </div>
            </div>

            <br>

            <div class="col-div-12">
                <div class="box-8">
                    <div class="content-box">
                        <p>Payment details </p>

                        <?php
                    include_once 'cataconfig.php';
                    $result = mysqli_query($conn,"SELECT Ad_no, user_id, date  FROM advertisement WHERE is_advanced_paid = 1 OR is_accepted = 1 ");
                    ?>
                       
                        <table>
                            <tr>
                                <th>Ad ID</th>
                                <th>User ID</th>
                                <th>Date</th>
                                <th>Payment</th>
                            </tr>


                        <?php
                            
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr class="<?php if(isset($classname)) echo $classname;?>">
                            <!--<form action="" method="POST" role = "form">-->
                            <td><?php echo $row["Ad_no"]; ?></td>
                            <td><?php echo $row["user_id"]; ?></td>
                            <td><?php echo $row["date"]; ?></td>
                            <td>LKR 500.00</td>
                        </tr>
                        <?php
	           $i++;
	           }
	          ?>
                    </table>
                    </div>
                </div>
            </div>

            

        
            
            <div class="clearfix"></div>
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
