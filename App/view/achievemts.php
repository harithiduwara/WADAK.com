<!Doctype HTML>
<html>

<head>
    <title>achievements</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="/WADAK.com/App/assets/css/achievemts.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

    <!-- <?= $uid ?> -->
    <div id="mySidenav" class="sidenav">
        <p class="logo">WADAK <span class="menu">&#9776;</span></p>

        <a href="/WADAK.com/App/view/home.php" class="icon-a"><i class="fa fa-home icons"></i>
            &nbsp;&nbsp;Home</a>
        <a href="/WADAK.com/App/view/hirepersondashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
            &nbsp;&nbsp;Dashboard</a>
        <a href="/WADAK.com/App/view/joborders.php?postType=job" class="icon-a"><i class="fa fa-tasks icons"></i>
            &nbsp;&nbsp;Job Posts</a>
        <a href="/WADAK.com/App/view/previousordershireperson.php?postType=job" class="icon-a"><i class="fa fa-tasks icons"></i>
            &nbsp;&nbsp;Previous Orders</a>
        <a href="/WADAK.com/App/view/joborders.php?postType=service" class="icon-a"><i class="fa fa-tasks icons"></i>
            &nbsp;&nbsp;Service Posts</a>
        <a href="/WADAK.com/App/view/previousordershireperson.php?postType=service" class="icon-a"><i class="fa fa-tasks icons"></i>
            &nbsp;&nbsp;Previous Services</a>
        <a href="/WADAK.com/App/view/news2.php" Target="_blank" class="icon-a"><i class="far fa-envelope-open"></i>
            &nbsp;&nbsp;News</a>
        <a href="/WADAK.com/App/view/messages.php" Target="_blank" class="icon-a"><i class="fa fa-tasks icons"></i>
            &nbsp;&nbsp;Messages</a>
        <a href="/WADAK.com/App/view/a.php" Target="_blank" class="icon-a"><i class="fa fa-dashboard icons"></i>
            &nbsp;&nbsp;Achievements</a>
        <a href="/WADAK.com/App/view/complain.php" Target="_blank" class="icon-a"><i class="fa fa-dashboard icons"></i>
            &nbsp;&nbsp;Complains</a>
        <a href="/WADAK.com/App/view/leaderboard.php" Target="_blank" class="icon-a"><i class="fa fa-dashboard icons"></i>
            &nbsp;&nbsp;Leaderboard</a>
        <a href="/WADAK.com/App/view/askad.php" Target="_blank" class="icon-a"><i class="fa fa-dashboard icons"></i>
            &nbsp;&nbsp;Advertisements</a>
        <a href="/WADAK.com/App/view/userProfileUpdate.php" Target="_blank" class="icon-a"><i class="fa fa-dashboard icons"></i>
            &nbsp;&nbsp;Update Profile</a>
    </div>

    <div id="main">
        <div class="head">
            <div class="col-div-1">
                <p class="nav">Achievements</p>

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
                    <p>wathsala <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
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
        <br />

        <div class="col-div-2">
            <div class="box">
                <p class="head-1">Details</p>
                <br />
                <table cellspacing="5">
                    <tr>
                        <th>Name</th>
                        <th>Place</th>
                        <th>Date</th>
                        <th>Level</th>
                        <th>Certificate</th>
                        <th>Id</th>
                        <th>Delete</th>
                        <th>Update</th>

                    </tr>
                    <?php
                    //require_once("/Implementation/backend/dbconfig.php");
                    $servername = "localhost";
                    $username = "toor";
                    $password = "toor";
                    $database = "wadak";

                    $connection = mysqli_connect($servername, $username, $password, $database);

                    // Check connection
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        exit();
                    }


                    $sql = "SELECT Name,Place,Date,Level,image,A_ID FROM achievements";
                    $result = mysqli_query($connection, $sql);
                    // $out = "";
                    // while ($data = $result->fetch_assoc()) {
                    //     $out .= "<tr><td>" . $data['Name'] . "</td><td>" . $data['Place'] .
                    //         "</td><td>" . $data['Date'] . "</td><td>" . $data['Level'] . "</td>
                    //     <td><img src='.$data[image].'/></td><td>" . $data['A_ID'] . "</td></tr>";
                    // }

                    // echo $out;
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $Name = $row['Name'];
                            $Place = $row['Place'];
                            $Date = $row['Date'];
                            $Level = $row['Level'];
                            $image = $row['image'];
                            $A_ID = $row['A_ID'];
                            echo '<tr>
                            <td>' . $Name . '</td>
                            <td>' . $Place . '</td>
                            <td>' . $Date . '</td>
                            <td>' . $Level . '</td>
                            <td><img src=' . $image . '/></td>
                            <td>' . $A_ID . '</td>
                            <td> <button> <a href="delete.php?did=' . $A_ID . '">Delete</a></button></td>
                            <td><button> <a href="updateacc.php?uid=' . $A_ID . '">Update</a></button></td>
                            </tr>';
                        }
                    }


                    //  


                    // }     




                    ?>

                </table>
            </div>
        </div>
        <div class="col-div-2">
            <div class="box1">
                <a href="addac.php">Add</a>
            </div>
            <!-- <div class="box2">
                <a href="deleteacc.php">Delete</a>
            </div>
            <div class="box2">
                <a href="updateacc.php">Update</a>
            </div> -->
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