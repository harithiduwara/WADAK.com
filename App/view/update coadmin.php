<?php
    session_start();

    $uid = $_GET["id"];

    $con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');

    if(!$con){
        die("Connection failed" .mysqli_connect_error());
        }

    // $query = "select * from postjob where uid=$uid";

    // $data = mysqli_query($con, $query);

    $query2 ="SELECT * FROM register where uid=$uid";

    $data2 = mysqli_query($con, $query2);
    
    $row2 = mysqli_fetch_assoc($data2);

?>
<!Doctype HTML>
<html>

    <head>
        <title>Update Co Admin</title>
        <style>
        a {
            text-decoration: none;
        }

        .input_data input {
            padding: 0.3em 0.5em;
            width: 50%;
            border: 1px solid #ccc;
            font-size: 1rem;
            background: transparent;
            border-radius: 4px;
            font-family: inherit;
            margin-bottom: 0.8rem;
        }

        .input_data input :focus {
            box-shadow: 0px 0px 0px 1px #16c79a;
            border-color: #16c79a;
        }

        #btn {
            transition: opacity 0.2s ease-in;
            font: inherit;
            vertical-align: baseline;
            box-sizing: border-box;
            text-shadow: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-weight: 400;
            outline: none;
            overflow: hidden;
            white-space: nowrap;
            max-width: 100%;
            min-width: -webkit-fit-content;
            min-width: -moz-fit-content;
            min-width: fit-content;
            display: inline-flex;
            padding: 0 0.4em;
            min-height: 2em;
            border: 1px solid #16c79a;
            font-size: 1rem;
            background: #16c79a;
            border-radius: 6px;
            text-decoration: none !important;
            color: #16c79a;
            padding: 0 1em;
        }

        .box {
            height: 70vh;
            left: 100px;
            position: fixed;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/Add%20Coadmin.css" type="text/css" />

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
            <a href="/WADAK.com/App/view/ServiceProviderUI-admin.php" class="icon-a"><i class="fa fa-users icons"></i>
                &nbsp;&nbsp;Users</a>
            <a href="ads.php" class="icon-a"><i class="fa fa-bullhorn icons"></i> &nbsp;&nbsp;Advertisements</a>
            <a href="/WADAK.com/App/view/View Report.php" class="icon-a"><i class="fa fa-envelope icons"></i>
                &nbsp;&nbsp;Reports</a>
            <a href="/WADAK.com/App/view/PaymentUI.php" class="icon-a"><i class="fa fa-money icons"></i>
                &nbsp;&nbsp;Payments</a>
            <a href="/WADAK.com/App/view/leaderboard.php" class="icon-a"><i class="fa fa-object-group icons"></i>
                &nbsp;&nbsp;Leaderboard</a>

        </div>


        <div id="main">
            <div class="head">
                <div class="col-div-1">
                    <p class="nav">UPDATE CO-ADMIN</p>
                    

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
                            <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a href="/WADAK.com/App/view/Admin-dashboard.php">Dashboard</a>
                            </p>
                            <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;<a href="/WADAK.com/App/controller/logout.php">Log Out</a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
            <br />

            <div class="col-div-2">
                <div class="box" style="height:65vh">

                    <form action="/WADAK.com/App/model/updateCoadmin.php " method="POST" 
                        style="text-align:center; color:#0b6403">

                        <div class="input-box">
                            <div class="input_label">
                                <span class="details">Co-admin Id</span>
                            </div>
                            <div class="input_data">
                                <input type="text" name="uid" placeholder=" " value="<?=$row2["uid"]?>">
                            </div>
                        </div>

                        <div class="input-box">
                            <div class="input_label">
                                <span class="details">Name</span>
                            </div>
                            <div class="input_data">
                                <input type="text" name="name" placeholder="Enter your name" value="<?=$row2["name"]?>">
                                <!-- <span class="error">*<?php echo $nameErr; ?></span> -->
                            </div>
                        </div>

                        <div class="input-box">
                            <div class="input_label">
                                <span class="details">Username</span>
                            </div>
                            <div class="input_data">
                                <input type="text" name="username" placeholder="Enter your username" value="<?=$row2["username"]?>">
                            </div>
                        </div>

                        <div class="input-box">
                            <div class="input_label">
                                <span class="details">Date of Birth</span>
                            </div>
                            <div class="input_data">
                                <input type="date" name="birthday" placeholder="Date of birth" value="<?=$row2["birthday"]?>" >
                            </div>
                        </div>

                        <div class="input-box">
                            <div class="input_label">
                                <span class="details">Address</span>
                            </div>
                            <div class="input_data">
                                <input type="text" name="address" placeholder="Enter your address" value="<?=$row2["address"]?>">
                            </div>
                        </div>

                        <div class="input-box">
                            <div class="input_label">
                                <span class="details">Email Address</span>
                            </div>
                            <div class="input_data">
                                <input type="email" name="email" placeholder="Enter your email" value="<?=$row2["email"]?>">
                            </div>
                        </div>

                        <div class="input-box">
                            <div class="input_label">
                                <span class="details">Contact No</span>
                            </div>
                            <div class="input_data">
                                <input type="tel" name="contactno" placeholder="Enter your phone number" value="<?=$row2["contactno"]?>">
                            </div>
                        </div>

                        <div class="button" id="btn">
                            <input type = "submit" name = "update" value = "UPDATE DATA">
                        </div>

                    </form>
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
