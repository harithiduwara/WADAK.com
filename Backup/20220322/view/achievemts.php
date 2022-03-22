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
                        <p>Service Provider Name <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                        <div class="profile-div">
                            <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="/WADAK.com/App/view/profile.php">Profile</a></p>
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
                            <th>Id</th>

                        </tr>
                        <?php
                //require_once("/Implementation/backend/dbconfig.php");
                $servername = "localhost";
                $username = "toor";
                $password = "toor";
                $database = "wadak";

                $connection = mysqli_connect($servername,$username,$password,$database);

                // Check connection
                if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
            }


                $sql ="SELECT Name,Place,Date,A_ID FROM achievements";
                $result = mysqli_query($connection,$sql);
                $out = "";
                while($data=$result->fetch_assoc()){
                    $out .= "<tr><td>".$data['Name']."</td><td>".$data['Place']."</td><td>".$data['Date']."</td><td>".$data['A_ID']."</td></tr>";
                }
                echo $out;
                ?>

                    </table>
                </div>
            </div>
            <div class="col-div-2">
                <div class="box1">
                    <a href="addac.php">Add</a>
                </div>
                <div class="box2">
                    <a href="deleteacc.php">Delete</a>
                </div>
                <div class="box2">
                    <a href="updateacc.php">Update</a>
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
