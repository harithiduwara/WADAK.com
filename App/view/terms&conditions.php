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

$reviewQuery = "SELECT count(*) as count FROM star_rating sr , postjob pj where pj.jobid = sr.jobId  AND pj.uid = $uid";
$review_count_result =  mysqli_query($con, $reviewQuery);
$review_count = mysqli_fetch_assoc($review_count_result)["count"];

$startsQ = "SELECT avg(rate) as avg FROM star_rating sr , postjob pj where pj.jobid = sr.jobId";
$stars_result =  mysqli_query($con, $startsQ);
$stars = mysqli_fetch_assoc($stars_result)["avg"];

$rankQ = "SELECT rank FROM (SELECT pj.uid, avg(rate) as avg ,@curRank := @curRank + 1 AS rank FROM star_rating sr , postjob pj, (SELECT @curRank := 0) r where pj.jobid = sr.jobId GROUP BY pj.uid ORDER BY avg desc) d WHERE d.uid = $uid";
$rank_result =  mysqli_query($con, $rankQ);
$rank = mysqli_fetch_assoc($rank_result)["rank"]

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
            <?php if (!isset($_SESSION["user"]["userrole"])) { ?>
                <li><a href="./login.php"></a></li>
            <?php } else { ?>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a>
                </li>
            <?php } ?>
            <div class="animation "></div>
        </ul>
    </nav>
    <div class="postcontainer" style="height:85vh">

        <div class="inputcontainer" id="loginbox" style="margin-left: 15vw; margin-top: 5vh; height:70vmin; display:grid; grid-template-columns: 1fr 1fr; grid-gap:1rem;">

            <diV>
                <h1 style="font-size:5rem; color:green; margin-top:15vh">Terms & Conditions</h1>

            </diV>
            <diV>
                <p style="font-size:2rem;  margin-top:15vh">1. Do not try to scam others</p>
                <p style="font-size:2rem;  ">2. Respect others</p>
                <p style="font-size:2rem;  ">If something happen bad to the community by you, the you will get ban for forever</p>
            </diV>

            <div style="padding:1rem; margin-top: -19rem">

               
            </div>
            <div>

 

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