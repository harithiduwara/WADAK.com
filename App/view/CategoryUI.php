<?php
    include_once 'cataconfig.php';
    $query = "SELECT* from categories";
    $run = mysqli_query($conn,$query);
?>
<!Doctype HTML>
<html>

    <head>
        <title>Categories</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/CategoryUI.css" type="text/css" />
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
            <a href="/WADAK.com/App/view/ads.php" class="icon-a"><i class="fa fa-bullhorn icons"></i> &nbsp;&nbsp;Advertisements</a>
            <a href="/WADAK.com/App/view/View Report.php" class="icon-a"><i class="fa fa-envelope icons"></i> &nbsp;&nbsp;Reports</a>
            <a href="/WADAK.com/App/view/PaymentUI.php" class="icon-a"><i class="fa fa-money icons"></i> &nbsp;&nbsp;Payments</a>
            <a href="/WADAK.com/App/view/leaderboard.php" class="icon-a"><i
                    class="fa fa-object-group icons"></i> &nbsp;&nbsp;Leaderboard</a>
            <!--<a href="#"class="icon-a"><i class="fa fa-bell icons"></i> &nbsp;&nbsp;Notification</a>-->
        </div>


        <div id="main">
            <div class="head">
                <div class="col-div-1">
                    <p class="nav">Category</p>

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
                            <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="#">Profile</a></p>
                            <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a href="#">Dashboard</a> </p>
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
                    <p class="head-1">Category - Details</p>
                    <br />

                    <!-- View Category table -->
                    <?php
                    include_once 'cataconfig.php';
                    $result = mysqli_query($conn,"SELECT C_ID, Name,value FROM categories");
                    ?>


                    <table>
                        <tr>
                            <th>Category ID</th>
                            <th>Name</th>
                            <th>Minimum Value</th>
                            <th>Select</th>
                            <th>Action</th>
                        </tr>
                
                <?php
	             $i=0;
	             while($row = mysqli_fetch_array($result)) {
	          ?>
	           <tr class="<?php if(isset($classname)) echo $classname;?>">
               <form action="" method="POST" role = "form">
	           <td><?php echo $row["C_ID"]; ?></td>
	           <td><?php echo $row["Name"]; ?></td>
	           <td><?php echo $row["value"]; ?></td>
               <td>
                   <input type = "checkbox" name = "keyToDelete" value="<?php echo $row['C_ID'];?>" required >
               </td>
               <td>
                    <a href="WADAK.com/App/model/deleteCateg.php? id="<?php echo $row['C_ID'];?>"" id="btn">Delete</a></td>
                
               </td>
	        
	           </tr>
	           <?php
	           $i++;
	           }
	          ?>
                    </table>
                </div>
            </div>
            <div class="col-div-2">
                <div class="box1">
                    <a href="AddCategory.php">Add</a>
                </div>
                <div class="box2">
                    <a href="DeleteCategory.php">Delete</a>
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
