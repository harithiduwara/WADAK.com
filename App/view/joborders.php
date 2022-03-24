<?php
    session_start();

    $uid = $_SESSION["user"]['uid'];

    $postType = $_GET['postType'];
  
    // var_dump($_SESSION["user"]['uid']);

    $con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
    
    if(!$con){
        die("Connection failed" . mysqli_connect_error());
    }
    $query = "SELECT * FROM register WHERE uid=$uid";
    $data = mysqli_query($con, $query);
    $userData = mysqli_fetch_assoc($data);

    $postTypeUC = ucfirst($postType);

?>

<!Doctype HTML>
<html>

    <head>
        <title>
            <?=$postTypeUC?> Orders
        </title>
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

            <a href="/WADAK.com/App/view/home.php" class="icon-a"><i class="fa fa-home icons"></i>
                &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/App/view/hirepersondashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Dashboard</a>
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
                    <p class="nav">Active <?=$postTypeUC?> Posts
                    </p>

                </div>

                <div class="col-div-1">
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
                            <?=$userData["username"]?> <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i>
                        </p>

                        <div class="profile-div">
                            <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a
                                    href="/WADAK.com/App/view/userprofile.php?uid=<?=$userData["uid"]?>">Profile</a></p>

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

            <div class="col-div-2">
                <div class="col-div-2">
                    <div class="box">
                        <p class="head-1"></p>
                        <br />

                        <?php                                
                                $sql = "select * from postjob where uid=$uid and status=0";

                                $result = $con->query($sql);

                                // echo $uid;
                                    echo "<table>
                                            <tr>
                                                <th>$postTypeUC ID</th>
                                                <th>$postTypeUC Title</th>
                                                <th>$postTypeUC Description</th>
                                                <th>Budget</th>
                                                <th>$postTypeUC Type</th>
                                                </tr>";
                        // output data of each row

                        // echo $result->num_rows;

                        while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["jobid"]. "</td>
                            <td>" . $row["title"]. "</td>
                            <td>" . $row["description"]. "</td>
                            <td>" . $row["budget"]. "</td>
                            <td>" . $row["jobtype"]. "</td>
                        </tr>";
                        }
                        echo "</table>";



                        $conn->close();
                        ?>

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
