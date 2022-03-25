<?php
    session_start();

    $con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
    
    if(!$con){
        die("Connection failed" . mysqli_connect_error());
    }

    $query1 = "SELECT * FROM `chatInterface` WHERE ownerId= 3 ORDER BY lastUpdate ASC";

    $data = mysqli_query($con, $query1);

    $action = $_GET["action"];
    
    if($action=="send_message"){
        $sender_id = $_SESSION['user']['uid'];
        $receiver_id = $_POST["receiver_id"];
        $message = $_POST["message"];
        $insertMessage = "INSERT INTO `chat`( `senderId`, `receiverId`, `message`) VALUES ('[value-1]','[value-2]','[value-3]')";
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
        <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <nav>
            <a href="/WADAK.com/App/view/home.php"> <label class="logo">WADAK</label></a>
            <ul style="margin-top: 1rem">
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/postjob.html">Add Post</a> </li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>
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
                    if(mysqli_num_rows($data)>0){
                        while($row=mysqli_fetch_assoc($data)){
                            $query2 ="SELECT name FROM register";

                            $result = mysqli_query($con, $query2);
                            
                            $row2 = mysqli_fetch_assoc($result);
                            echo '<div class="chat1">
                                    <p style="font-size:2rem; text-align:left; border: 1px solid green">'.$row2["name"].'</p>
                                    <br>
                                    </div>';
                        }
                    }
                    ?>
                </div>






                <div class="rightbar">
                    <h1 style="font-size:3rem">Username</h1>
                    <div>

                    </div>
                    <div style="bottom:1rem">
                        <form action="/WADAK.com/App/view/messages.php?action=send_message" method="post"
                            enctype="multipart/form-data">

                            <div class="inputbox">

                                <span style="width: -webkit-fill-available;"> <input type=" text" name="search"
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
