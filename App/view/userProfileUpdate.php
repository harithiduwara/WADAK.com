<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Update achievements</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/addac.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div id="mySidenav" class="sidenav">
            <p class="logo">WADAK <span class="menu">&#9776;</span></p>

            <a href="/WADAK.com/App/view/home.php" class="icon-a"><i class="fa fa-home icons"></i>
                &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/App/view/hirepersondashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Dashboard</a>
            <a href="/WADAK.com/App/view/joborders.php" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Job Posts</a>
            <a href="/WADAK.com/App/view/previousordershireperson.php?postType=job" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Previous Orders</a>
            <a href="/WADAK.com/App/view/previousorders.php" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Service Posts</a>
            <a href="/WADAK.com/App/view/previousordershireperson.php?postType=service" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Previous Services</a>
            <a href="/WADAK.com/App/view/news2.php" Target="_blank" class="icon-a"><i class="far fa-envelope-open"></i>
                &nbsp;&nbsp;News</a>
            <a href="/WADAK.com/App/view/chat.php" Target="_blank" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Messages</a>
            <a href="/WADAK.com/App/view/a.php" Target="_blank" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Achievements</a>
            <a href="/WADAK.com/App/view/leaderboard.php" Target="_blank" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Leaderboard</a>
            <a href="/WADAK.com/App/view/askforad.php" Target="_blank" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Advertisements</a>
            <a href="/WADAK.com/App/view/userProfileUpdate.php" Target="_blank" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Update Profile</a>
        </div>

        <div id="main">
            <div class="head">
                <div class="col-div-1">
                    <p class="nav">Update Profile</p>
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
                        <div class="profile-div">
                            <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="profile.php">Profile</a></p>
                            <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;Log Out</p>
                        </div>
                        <p>
                            <?=$userData["username"]?> <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br>


        <div class="inputContainer" style="margin:auto;width: 50%; height:50vh">
            <div class="form" style="position: relative;">
                <form action="updateac.php" method="POST">
                    <div class="inputbox">
                        <input type="value" name="id" required="true" placeholder="Email">
                    </div>
                    <div class="inputbox">
                        <input type="value" name="id" required="true" placeholder="Contact Nunmber">
                    </div>
                    <div class="inputbox">
                        <input type="text" name="achievementName" required="true" placeholder="Telegram Link">
                    </div>
                    <div class="inputbox">
                        <input type="text" name="place" required="true" placeholder="Twitter Link">
                    </div>
                    <div class="inputbox">
                        <input type="text" name="date" required="true" placeholder="Instagram Link">
                    </div>

                    <div class="inputbox">
                        <table style="width:50%;">
                            <tr>
                                <td><input type="submit" name="add" value="Update" style="width: 200px !important;">
                                </td>
                                <td><input type="reset" name="reset" style="width: 200px !important;"
                                        value="Revoke Links">
                                </td>
                            </tr>
                        </table>

                    </div>
                </form>
            </div>
        </div>

        </br>

        </div>
        <?php
        if(isset($_GET['messege'])){
            if($_GET['messege']==1){
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