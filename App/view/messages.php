<?php
session_start();

$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');

if (!$con) {
    die("Connection failed" . mysqli_connect_error());
};

$active_uid = $_GET["active_uid"];
$uid = $_SESSION['user']['uid'];

$action = $_GET["action"];

if ($action == "send_message") {
    $sender_id = $_SESSION['user']['uid'];
    $receiver_id = $_POST["receiver_id"];
    $message = $_POST["message"];
    if (!$message == "") {
        $insertMessage = "INSERT INTO `chat`( `senderId`, `receiverId`, `message`) VALUES ('" . $sender_id . "','" . $receiver_id . "','" . $message . "')";
        if (mysqli_query($con, $insertMessage)) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $reg . "<br>" . mysqli_error($con);
        }
    }
}



$search2 = mysqli_fetch_assoc($search1);

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
    <title>Messages</title>
    <link rel="stylesheet" href="/WADAK.com/App/assets/css/message.css">
    <link rel="stylesheet" href="/WADAK.com/App/assets/css/postjob.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav>
        <a href="/WADAK.com/App/view/home.php"> <label class="logo">WADAK</label></a>
        <ul style="margin-top: 1rem">
            <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
            <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
            <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>
            <?php if (!isset($_SESSION["user"]["userrole"])) { ?>
                <li><a href="./login.php"></a></li>
            <?php } else { ?>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fa fa-user"></i></a>
                </li>
            <?php } ?>
            <div class="animation "></div>
        </ul>
    </nav>

    <div class="postcontainer chat-container">
        <div class="chat">
            <div class="leftbar">

                <form>
                    <input type="text" name="search" style="width: -webkit-fill-available; height:3rem; text-align:center" placeholder="Search User..">
                </form>

                <?php
                
                $users_query = "SELECT * FROM register";

                $users = mysqli_query($con, $users_query);

                if (mysqli_num_rows($users) > 0) {
                    while ($row = mysqli_fetch_assoc($users)) {
                        if ($row['uid'] == "$uid" || $row["userrole"] == "admin") {
                            continue;
                        }
                ?>

                        <a class="chat-item <?= $row["uid"] == $active_uid ? 'active' : '' ?>" href="?active_uid=<?= $row["uid"] ?>">
                            <div style="border-radius:50%;width:35px;margin-right:1rem;height:35px;object-fit: cover; background:url(<?= $row["profilePic"] ?>);background-size:cover;">
                                &nbsp; </div>
                            <div>
                                <div style="font-weight:500"> <?= $row["name"] ?> </div>

                                <div style="font-family:monospace">@<?= ucfirst($row["username"]) ?>

                                    <?PHP
                                    if ($row["userrole"] == "admin" || $row["userrole"] == "coadmin") {
                                    ?> <i class="fa fa-star" style="color:gold"></i>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </a>
                    <?php } ?>

            </div>
        <?php } ?>






        <div class="rightbar">
            <div>
                <?php
                $chatPerson = "SELECT * FROM register WHERE uid = $active_uid";

                $chatPerson1 = mysqli_query($con, $chatPerson);
                $chatPerson2 = mysqli_fetch_assoc($chatPerson1);
                ?>

                <a class="chat-item  ">
                    <div style="border-radius:50%;width:35px;margin-right:1rem;height:35px;object-fit: cover; background:url(<?= $chatPerson2["profilePic"] ?>);background-size:cover;">
                        &nbsp;
                    </div>
                    <div>
                        <div style="font-weight:500;font-size:1.3em"> <?= $chatPerson2["name"] ?> </div>
                        <div style="font-family:monospace"><?php @ ucfirst($chatPerson2["username"]) ?>
                            <?PHP
                            if ($chatPerson2["userrole"] == "admin" || $chatPerson2["userrole"] == "coadmin") {
                            ?> <i class="fa fa-star" style="color:gold"></i>
                            <?php }
                            ?>
                        </div>

                    </div>
                </a>
            </div>

            <div style="flex:1 1 0;max-height:60vh;  display: flex;margin:0 1rem;
    flex-direction: column;">
                <?php
                $msgs_query = "SELECT * FROM `chat` WHERE (senderId = $uid AND receiverId = $active_uid ) OR (senderId = $active_uid AND receiverId = $uid ) ORDER BY chatDate ";
                $msgs = mysqli_query($con, $msgs_query);

                if (mysqli_num_rows($msgs) > 0) {
                    while ($row = mysqli_fetch_assoc($msgs)) { ?>

                        <div class="msg" style="<?= $active_uid == $row["senderId"] ? 'align-self: self-start;' : 'align-self: self-end;' ?>">
                            <?= $row["message"] ?> </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <div style="bottom:1rem">
                <form action="/WADAK.com/App/view/messages.php?action=send_message&active_uid=<?= $active_uid ?>" method="post" enctype="multipart/form-data">
                    <div class="typing">
                        <input value="<?= $active_uid ?>" type='hidden' name="receiver_id">
                        <span style="width: -webkit-fill-available;">
                            <input type="text" name="message" placeholder="Type here.......">
                            <button type="submit" class="btn-send"><i class="fa fa-paper-plane"></i> &nbsp; Send </button>
                        </span>

                    </div>
                </form>
            </div>

        </div>

        </div>

    </div>
</body>

</html>

<?php
$con->close();
?>