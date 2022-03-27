<?php
    session_start();

    $con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
    
    if(!$con){
        die("Connection failed" . mysqli_connect_error());
    }

    $active_uid = $_GET["active_uid"] ;
    $uid = $_SESSION['user']['uid'];

    $action = $_GET["action"];
    
    if($action=="send_message"){
        $sender_id = $_SESSION['user']['uid'];
        $receiver_id = $_POST["receiver_id"];
        $message = $_POST["message"];
        if(!$message==""){
            $insertMessage = "INSERT INTO `chat`( `senderId`, `receiverId`, `message`) VALUES ('".$sender_id."','".$receiver_id."','".$message."')";
        if (mysqli_query($con, $insertMessage)) {
        //echo "New record created successfully";
    } 
    else {
        echo "Error: " . $reg . "<br>" . mysqli_error($con);
    }
    }
        }
        
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
        <div class="postcontainer" style="height:120vh">
            <div class="chat">
                <div class="leftbar">
                    <input type="text" name="search"
                        style="width: -webkit-fill-available; height:3rem; text-align:center"
                        placeholder="Search User..">

                    <?php
                    
                        $users_query ="SELECT username,uid FROM register";

                        $users = mysqli_query($con, $users_query);
                    
                    if(mysqli_num_rows($users)>0){
                        while($row=mysqli_fetch_assoc($users)){ 
                            if($row['uid']=="$uid") {
                                continue;
                            }
                            ?>

                    <div class="chat1">
                        <a href="?active_uid=<?=$row["uid"]?>"
                            style=" font-size:2rem; text-align:left; border: 1px solid green">
                            <?= ucfirst($row["username"])?></a>
                        <br>
                    </div>
                    <?php } ?>

                </div>
                <?php } ?>






                <div class=" rightbar">
                    <div style="border: 1px solid green">

                        <?php
                                $chatPerson = "SELECT username FROM register WHERE uid = $active_uid";
                        
                                $chatPerson1 = mysqli_query($con, $chatPerson);
                                $chatPerson2 = mysqli_fetch_assoc($chatPerson1);
                        ?>
                        <h1 style="font-size:3rem">
                            <?= ucfirst($chatPerson2["username"])?>
                        </h1>
                    </div>


                    <?php
                       $msgs_query = "SELECT * FROM `chat` WHERE (senderId = $uid AND receiverId = $active_uid ) OR (senderId = $active_uid AND receiverId = $uid ) ORDER BY chatDate "; 
                        $msgs = mysqli_query($con, $msgs_query);

                    if(mysqli_num_rows($msgs)>0){
                    while($row=mysqli_fetch_assoc($msgs)){ ?>

                    <div
                        style="<?=$active_uid == $row["senderId"] ? 'text-align: left; margin-left:1rem':'text-align: right; margin-right:1rem'?>">
                        <?= $row["message"]?> </div>

                    <?php } ?>


                    <?php } ?>



                    <div>

                    </div>
                    <div style="bottom:1rem">
                        <form action="/WADAK.com/App/view/messages.php?action=send_message&active_uid=<?=$active_uid?>"
                            method="post" enctype="multipart/form-data">

                            <div class="typing" style="margin-top:55vh">
                                <input value="<?=$active_uid?>" type='hidden' name="receiver_id">
                                <span style="width: -webkit-fill-available;">
                                    <input type=" text" name="message"
                                        style="width:80%;height:3rem; text-align:center; margin-bottom:0rem"
                                        placeholder="Type here.......">


                                    <button type="submit"><i class="fa-solid fa-angles-up"></i>Send
                                    </button>
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
    $con -> close();
?>
