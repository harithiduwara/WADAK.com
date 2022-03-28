<!Doctype HTML>
<html>

    <head>
        <title>View Report</title>
        <style>
            a {
                text-decoration: none;
            }

            .del-button{
                padding: 8px;
                background-color: #4a504fbd;
                border-radius: 10px;
            }

            .del-button a{
                color: white;
            }
            .view-btn{
                padding: 8px;
                background-color: #30a117bd;
                border-radius: 10px;
            }

            .view-btn a{
                color: white;
            }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/View%20Report.css" type="text/css" />
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
            <a href="/WADAK.com/App/view/ServiceProviderUI-admin.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Users</a>
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
                    <p class="nav">Reports</p>

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
                        <p>Admin <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                        <div class="profile-div">
                          
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

            <div class="col-div-2">
                <div class="box">
                    <p class="head-1">Report - Details</p>
                    <br />

<!-- View Complains -->
                    <?php
                    include_once 'cataconfig.php';
                    $result = mysqli_query($conn,"SELECT c_ID, `from` ,title, complain, sol, any FROM complains");
                    ?>

                    <table>
                        <tr>
                            <th>Complain Id</th>
                            <th>Complainer</th>
                            <th>Title</th>
                            <th>Complain</th>
                            <th>Solution to be expected</th>
                            <th>Any other things</th>
                            <!--<th>check</th> -->
                            <th>Action</th>
                        </tr>

                        <?php
	                        $i=0;
	                        while($row = mysqli_fetch_array($result)) {
	                    ?>
                            <tr class="<?php if(isset($classname)) echo $classname;?>">
                            <!--<form action="" method="POST" role = "form">-->
                            <td><?php echo $row["c_ID"]; ?></td>
                            <td><?php echo $row["from"]; ?></td>
                            <td><?php echo $row["title"]; ?></td>
                            <td><?php echo $row["complain"]; ?></td>
                            <td><?php echo $row["sol"]; ?></td>
                            <td><?php echo $row["any"]; ?></td>
                            <!--<td>
                                <input type = "checkbox" name = "keyToDelete" value="<?php // echo $row['C_ID'];?>" required >
                            </td> -->
                            <td>

                                <div class="del-button"><a href="/WADAK.com/App/model/deleterep.php? id=<?php echo $row["c_ID"];?>">Delete</a></div>    
                            
                                <br>
                                <div class="view-btn"><a href="/WADAK.com/App/view/ServiceProviderUI-admin.php">View</a></div>
                                
                            </td>

                        </tr>
                        <?php
	           $i++;
	           }
	          ?>
                        
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
