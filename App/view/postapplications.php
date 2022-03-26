<?php

/**
 * PENDING   - 0
 * ACCEPTED  - 1
 * REJECTED  - 2
 * COMPLETED - 3
 * CANCELLED - 4
 */
$status =
    [
        "0" => "PENDING",
        "1" => "ACCEPTED",
        "2" => "REJECTED",
        "3" => "COMPLETED",
        "4" => "CANCELLED"
    ];

session_start();

$uid = $_SESSION["user"]['uid'];
$postType = $_GET["postType"] ?? "job";
// var_dump($_SESSION["user"]['uid']);
$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}

if (isset($_GET["approve_id"])) {
    mysqli_query($con, "UPDATE postApplication SET status = 1 WHERE id=" . $_GET["approve_id"]);
    header("location:/WADAK.com/App/view/postapplications.php");
}

if (isset($_GET["reject_id"])) {
    mysqli_query($con, "UPDATE postApplication SET status = 2 WHERE id=" . $_GET["reject_id"]);
    header("location:/WADAK.com/App/view/postapplications.php");
}

$query = "SELECT * FROM register WHERE uid=$uid";
$data = mysqli_query($con, $query);
$userData = mysqli_fetch_assoc($data);

$postTypeUC = ucfirst($postType);
?>
<!Doctype HTML>
<html>

<head>
    <title>Post Applications</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="/WADAK.com/App/assets/css/Admin-dashboard.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
<div id="mySidenav" class="sidenav">
            <p class="logo">WADAK <span class="menu">&#9776;</span></p>

            <a href="/WADAK.com/App/view/home.php" class="icon-a"><i class="fa fa-home icons"></i>
                &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/App/view/hirepersondashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Dashboard</a>
            <a href="/WADAK.com/App/view/postapplications.php" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Post Applications</a>
                
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
            <a href="/WADAK.com/App/view/messages.php" Target="_blank" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Messages</a>
            <a href="/WADAK.com/App/view/a.php" Target="_blank" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Achievements</a>
            <a href="/WADAK.com/App/view/complain.php" Target="_blank" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Complains</a>
            <a href="/WADAK.com/App/view/leaderboard.php" Target="_blank" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Leaderboard</a>
            <a href="/WADAK.com/App/view/askad.php" Target="_blank" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Advertisements</a>
            <a href="/WADAK.com/App/view/userProfileUpdate.php" Target="_blank" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Update Profile</a>
        </div>
    <div id="main">

        <div class="head">
            <div class="col-div-1">
                <p class="nav">Post Applications </p>
            </div>

            <div class="col-div-1">
                <i class="fa fa-bell noti-icon"></i>
                <div class="notification-div">
                    <p class="noti-head">Notification </p>
                    <hr class="hr" />
                    <p>You have new report <span>alert </span> </p>
                </div>

                <div class="profile">

                    <p>
                        <?= $userData["username"] ?> <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i>
                    </p>

                    <div class="profile-div">
                        <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="/WADAK.com/App/view/userprofile.php?uid=<?= $userData["uid"] ?>">Profile</a></p>

                        <p><i class="fa-duotone fa-arrow-right-from-bracket"></i> &nbsp;&nbsp; <a href="/WADAK.com/App/controller/logout.php">Log
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
            <div class="box" style="width: 78vw; height: 60vh;">
                <p class="head-1"></p>
                <br />
                <?php
                $sql = "SELECT  pj.*, pa.* , r.name as applicant_name, pa.description as po_desc FROM `postApplication` pa,register r, postjob pj where pj.jobid = pa.jobid AND r.uid = pa.applicantId AND pa.postOwnerId = $uid order by created_at desc ";


                $result = $con->query($sql);

                ?><table style="width:78vw">
                    <tr>
                        <th>Post ID</th>
                        <th>Post Title</th>
                        <th>Applicant name</th>
                        <th>Budget Proposed</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $row["jobid"] ?></td>
                            <td><?= $row["title"] ?></td>
                            <td><?= $row["applicant_name"] ?></td>
                            <td><?= $row["newBudget"] ?></td>
                            <td><?= $row["po_desc"] ?></td>
                            <td><?= $status[$row["status"]] ?></td>
                            <td>
                                <?php if ($row["status"] == 0) { ?>
                                    <a style="color:green" href="?approve_id=<?= $row["id"] ?>">Approve</a> |
                                    <a style="color:red" href="?reject_id=<?= $row["id"] ?>">Reject</a>
                                <?php } ?>

                            </td>
                        </tr>
                    <?php
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