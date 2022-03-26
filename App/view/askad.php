<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add achievements</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="addac.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <p class="logo">WADAK <span class="menu">&#9776;</span></p>
        <p class="logo1"> <span class="menu1">&#9776;</span></p>
        <a href="#" class="icon-a"><i class="fa fa-home icons"></i> &nbsp;&nbsp;Home</a>
        <a href="AdminPanel.html" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="achievemts.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Achievements</a>
        <a href="/WADAK.com/Implementation/view/news2.php" class="icon-a"><i class="far fa-envelope-open"></i> &nbsp;&nbsp;News</a>
        <a href="/WADAK.com/Implementation/view/messages.html" class="icon-a"><i class="fa fa-tasks icons"></i>
            &nbsp;&nbsp;Messages</a>
        <a href="/WADAK.com/App/view/complain.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
            &nbsp;&nbsp;complaints</a>
        <a href="/WADAK.com/App/view/complain.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
            &nbsp;&nbsp;Leaderboard</a>
        <a href="/WADAK.com/Implementation/view/leaderboard.html" class="icon-a"><i class="fa fa-dashboard icons"></i>
            &nbsp;&nbsp;applied posts</a>
        <a href="/WADAK.com/Implementation/view/leaderboard.html" class="icon-a"><i class="fa fa-dashboard icons"></i>
            &nbsp;&nbsp;Invitations</a>
    </div>

    <div id="main">
        <div class="head">
            <div class="col-div-1">
                <p class="nav">Advertisement payment</p>
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
                    <p>Service Provider Name <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                    <div class="profile-div">
                        <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="profile.php">Profile</a></p>
                        <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a href="#">Dashboard</a> </p>
                        <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;Log Out</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br>


        <!-- <input type="hidden" name="id" value="<?php echo $_SESSION['user']['uid'] ?>" placeholder="Enter your ID">
                    <br><br>
                    <br><br><span> Description</span><br><br>
                    <i class="fas fa-user"></i>
                    <input type="text" name="Description" placeholder="Description">
                    <br><br><span> Type</span><br><br>
                    <i class="fas fa-user"></i>
                    <input type="text" name="type" placeholder="Type">
                    <br><br><span> Advertisement Image</span><br><br>
                    <i class="fas fa-user"></i>
                    <input type="file" name="file">

                </div> <br><br><br>
                <input type="submit" name="pay" value="Pay from here"> -->



        <div class="inputContainer" style="margin:auto;width: 50%;">
            <div class="form" style="position: relative;">
                <form action="addpayHandle.php" method="POST" enctype="multipart/form-data">
                    <div class="inputbox">
                        <input type="hidden" name="id" value="<?php echo $_SESSION['user']['uid'] ?>" placeholder="Enter your ID">
                    </div>
                    <div class="inputbox">
                        <input type="text" name="description" required="true" placeholder="description">
                    </div>
                    <div class="inputbox">
                        <input type="text" name="email" required="true" placeholder="Email">
                    </div>
                    <div class="inputbox">
                        <input type="file" name="file" required="true">
                    </div>
                    <!-- <div class="inputbox">
                    <input type="value" placeholder="Achievements ID">
                </div> -->
                    <div class="inputbox">
                        <table style="width:50%;">
                            <tr>
                                <td><input type="submit" name="add" value="Add" style="width: 200px !important;"></td>
                                <td><input type="reset" name="reset" style="width: 200px !important;" value="reset"></td>
                            </tr>
                        </table>


                        <!-- <a href="CategoryUI.html">Add</a>
                    <a href="CategoryUI.html">Cancel</a> -->
                    </div>
                </form>
            </div>
        </div>

        </br>

    </div>
    <?php
    if (isset($_GET['messege'])) {
        if ($_GET['messege'] == 1) {
            echo "<script> alert('Item Added.')</script>";
        }
    }
    ?>
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