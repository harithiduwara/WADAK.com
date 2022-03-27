<?php
session_start();

$jobid = $_GET["jobid"];

$uid = $_SESSION["user"]['uid'];

$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');

if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}

mysqli_query($con, "update postjob set views = views + 1 where jobid=$jobid");

$query = "select * from postjob where jobid=$jobid";

$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);

// echo $row["jobid"];
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
    <title> <?= $row["title"] ?> </title>
    <link rel="stylesheet" href="/WADAK.com/App/assets/css/postjob.css">
    <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
</head>



<body>

<nav>
            <a href="/WADAK.com/App/view/home.php"> <label class="logo">WADAK</label></a>
            <ul style="margin-top: 1rem">
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

                <li><a href="/WADAK.com/App/view/messages.php">Messages</a> </li>
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

        <div class="inputcontainer" id="loginbox" style="margin-left: 15vw; margin-top: 5%; height:90vmin; display:grid; grid-template-columns: 1fr 1fr; grid-gap:1rem;">

            <diV><img src="
                    <?php
                    if ($row["filename"] == null) {
                        echo "/WADAK.com/App/uploads/noimage.jpg";
                    } else {
                        echo $row["filename"];
                    }
                    ?>
                
                
                " alt="service" style="width:100% ; height:65vmin; object-fit: cover; ">

            </diV>
            <diV>

                <h1 style="font-size:3rem; color: green;
                                padding: 7px 13px;
                                border-radius: 3px;
                                font-weight: bold;
                                text-transform: uppercase;
                                text-align: center;"> <?php echo $row["title"] ?></h1>
                <p style="font-size:1.5rem;margin:0.3rem 0; color:green">

                    <?php
                    $username = mysqli_query($con, "SELECT username from register where uid = '" . $row["uid"] . "'");
                    $username = mysqli_fetch_assoc($username);
                    echo "By " . $username["username"] ?>
                </p>

                <p style="font-size:2rem;margin:1rem 0; ">
                    <?php echo $row["description"] ?>
                </p>

                <h1 style="font-size:2rem;font-weight:400; margin-bottom: 1rem">
                    <?php echo number_format($row["budget"]) ?> LKR
                </h1>

                <p style="font-size:1rem; margin: 1rem"><?php echo $row["views"] ?> Views</p>

                <div style="margin-top:1rem">


                    <?PHP
                    if (!isset($_SESSION["user"]["userrole"])) { ?>
                        <a href="/WADAK.com/App/view/apply.php?jobid=<?= $row["jobid"] ?>" class="action-button"> Apply </a>
                        <a href="/WADAK.com/App/view/login.php" class="action-button">Chat</a>
                        <?php } else {
                        if ($row["uid"] != $uid) { ?>
                            <a href="/WADAK.com/App/view/apply.php?jobid=<?= $row["jobid"] ?>" class="action-button"> Apply </a>
                            <a href="/WADAK.com/App/view/messages.php?active_uid=<?= $row["uid"] ?>" class="action-button">
                                Chat
                            </a>
                        <?php } else { ?>
                            <a href="/WADAK.com/App/controller/deletePost.php?jobid=<?= $row["jobid"] ?>" style="background:#aa0000" class="action-button"> Delete </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </diV>

            <div style="padding:1rem; margin-top: -4rem">
                <?php
                $reviewQuery = "SELECT count(*) as count FROM star_rating sr , postjob pj where pj.jobid = sr.jobId  AND pj.uid = $uid";
                $review_count_result =  mysqli_query($con, $reviewQuery);
                $review_count = mysqli_fetch_assoc($review_count_result)["count"];

                $startsQ = "SELECT avg(rate) as avg FROM star_rating sr , postjob pj where pj.jobid = sr.jobId  AND pj.uid = $uid";
                $stars_result =  mysqli_query($con, $startsQ);
                $stars = mysqli_fetch_assoc($stars_result)["avg"];

                $rankQ = "SELECT rank FROM (SELECT pj.uid, avg(rate) as avg ,@curRank := @curRank + 1 AS rank FROM star_rating sr , postjob pj, (SELECT @curRank := 0) r where pj.jobid = sr.jobId GROUP BY pj.uid ORDER BY avg desc) d WHERE d.uid = $uid";
                $rank_result =  mysqli_query($con, $rankQ);
                $rank = mysqli_fetch_assoc($rank_result)["rank"]

                ?>
                <h1 style="font-size:5rem; padding-bottom:2rem"><i class="fa fa-stars"></i> &nbsp<?= substr($stars, 0, 3) ?></h1>
            </div>
            <div>

                <?php $reviews = "SELECT avg(rate) as avg FROM star_rating where jobId = $jobid";
                $data10 = mysqli_query($con, $reviews);
                if (mysqli_num_rows($data10) == 0) {
                ?><h1 style="font-size:3rem; margin-top:-10vh; color:green; font-weight:300">No Reviews Yet</h1><?php
                                        } ?>
                <div class="grid-container" style="margin-top:-4rem; display:grid; grid-template-columns:1fr 7fr; grid-gap:1rem">
                    <?php

                    if (mysqli_num_rows($data10) > 0) {

                        while ($row10 = mysqli_fetch_assoc($data10)) { ?>
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
                    <?php }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    </div>
    <style>
        .action-button {
            padding: 1rem;
            margin-right: 1rem;
            background-color: green;
            border-radius: 0.4rem;
            color: white;
            font-size: 1.5rem;
            font-weight: 400;
            display: inline-block;
        }
    </style>
</body>

</html>