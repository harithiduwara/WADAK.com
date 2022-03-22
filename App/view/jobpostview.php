<?php
    session_start();

    $jobid = $_GET["jobid"];



    $con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');

    if(!$con){
        die("Connection failed" .mysqli_connect_error());
        }

    $query = "select * from postjob where jobid=$jobid";

    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <title>Post A Job</title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/postjob.css">
    </head>



    <body>
        <?php
            $row = mysqli_fetch_assoc($result);
            // echo $row["jobid"];
        ?>
        <nav>
            <label class="logo">WADAK</label>
            <ul style="margin-top: 1rem">
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php" target="_blank">Jobs</a> </li>
                <li><a href="/WADAK.com/App/view/services.php" target="_blank">Services</a> </li>
                <?php if(isset($_SESSION["user"]["userrole"])){?>
                <li><a href="/WADAK.com/App/view/messages.php" target="_blank">Messages</a> </li>
                <?php }?>
                <li><a href="/WADAK.com/App/view/userprofile.php" target="_blank">PROFILE</a> </li>
                <?php if(!isset($_SESSION["user"]["userrole"])){?>
                <li><a href="./login.php"></a></li>
                <?php }else {?>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a>
                </li>
                <?php } ?>
                <div class="animation "></div>
            </ul>
        </nav>
        <div class="postcontainer" style="height:120vmin">

            <div class="inputcontainer" id="loginbox"
                style="margin-left: 15vw; margin-top: 5%; height:90vmin; display:grid; grid-template-columns: 1fr 1fr; grid-gap:1rem;">

                <diV><img src="
                    <?php
                    if($row["filename"]==null){
                        echo "/WADAK.com/App/uploads/noimage.jpg";
                    }
                    else{
                       echo $row["filename"];
                    }
                    ?>
                
                
                " alt="service" style="width:100% ; height:65vmin">

                </diV>
                <diV>

                    <h1 style="font-size:3rem; color: green;
                                padding: 7px 13px;
                                border-radius: 3px;
                                font-weight: bold;
                                text-transform: uppercase;
                                text-align: center;"> <?php echo $row["title"] ?></h1>

                    <p style="font-size:2rem">
                        <?php echo $row["description"] ?>
                    </p>

                    <h1 style="font-size:50px">
                        <?php echo $row["budget"] ?> LKR
                    </h1>
                    <p><?php echo $row["views"] ?> Views</p>

                    <span>
                        <button style="padding:1rem">
                            Apply
                        </button>
                        <button style="padding:1rem">
                            Chat
                        </button>
                    </span>
                </diV>
                <div style="padding:1rem; margin-top: -4rem">
                    <h1 style="font-size:3rem">Rank</h1>
                    <h1 style="font-size:2rem">5 Stars</h1>
                </div>
                <div>
                    <div class="grid-container"
                        style="margin-top:-4rem; display:grid; grid-template-columns:1fr 7fr; grid-gap:1rem">
                        <div class="a">
                            <p>hello</p>
                        </div>
                        <div class="b">
                            <p>Hello</p>
                        </div>
                        <div class="c">
                            <p>Stars</p>
                        </div>
                        <div class="d">
                            <p>review</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

</html>