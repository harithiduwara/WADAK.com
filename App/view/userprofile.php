<?php
    session_start();

    $uid = $_GET["uid"];

    $con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');

    if(!$con){
        die("Connection failed" .mysqli_connect_error());
        }

    $query = "select * from postjob where uid=$uid";

    $data = mysqli_query($con, $query);

    
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
        <title>User Profile</title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/userprofile.css">

        <link rel="stylesheet" href="/WADAK.com/App/view/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/WADAK.com/App/view/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/categorymain.css">

        <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
    </head>



    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul style="margin-top: 1rem">
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php" target="_blank">Jobs</a> </li>
                <li><a href="/WADAK.com/App/view/services.php" target="_blank">Services</a> </li>
                <?php if(isset($_SESSION["user"]["userrole"])){?>
                <li><a href="/WADAK.com/App/view/messages.php" target="_blank">Messages</a> </li>
                <?php }?>
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
            <div class="grid-items" style=" display: grid;
                                            grid-template-columns: 1fr;
                                            grid-gap: 1rem;">

                <hr>
                <div class="cardcontainer">

                    <div class="card">
                        <header>
                            <div class="avatar">
                                <img src="/WADAK.com/App/assets/images/1.jpg" alt="Jhon Doe" id="profilepic" />
                            </div>
                        </header>

                        <h3 class="usernameProfile">Jhon Doe</h3>
                        <div class="desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit et
                                cupiditate deleniti. Lorem ipsum dolor sit amet, consectetur adipisicing elit et
                                cupiditate delenitiggggggggggggg
                                scascikudfasivhnisfndhiovhioshfvijhaihsioalhvohfdiosvhadhisfhvisfohvids</p>
                        </div>
                        <div class="chat" style="padding:0.5rem">
                            <a href="" target="_blank"><i class="fa fa-envelope fa-3x"></i></a>
                            <div class="clear"></div>
                        </div>

                        <footer>
                            <a href="" target="_blank"><i class="fa fa-telegram fa-2x"></i></a>
                            <a href=""><i class="fa fa-twitter fa-2x"></i></a>
                            <a href=""><i class="fa fa-instagram fa-2x"></i></a>
                        </footer>
                    </div>

                </div>

            </div>
            <br>
            <br>
            <hr>
            <div class="posts">


                <div style="display:grid; grid-template-columns: 1fr 1fr 1fr 1fr; grid-gap:1rem; height: 40vmin;
                overflow: hidden">

                    <?php
                if(mysqli_num_rows($data)>0){
                    while($row = mysqli_fetch_assoc($data)){
                        ?>
                    <div class="sectionheading3">
                        <div class="card1" style="margin:1rem"><img src="
                    <?php
                    if($row["filename"]==null){
                        echo "/WADAK.com/App/uploads/noimage.jpg";
                    }
                    else{
                       echo $row["filename"];
                    }
                    ?>
                
                
                " alt="service" style="width:100% ; height:200px">
                            <a href="/WADAK.com/App/view/userprofile.php?uid=<?=$row["uid"]?>">
                                <p style="text-align:end">
                                    <?=$row["username"]?>
                                </p>
                            </a>

                            <a href="/WADAK.com/App/view/jobpostview.php?jobid=<?=$row["jobid"]?>">
                                <h3 style="text-align:center"><?= $row["title"] ?>
                                </h3>
                            </a>
                            <br>
                            <a href="/WADAK.com/App/view/jobpostview.php?jobid=<?=$row["jobid"]?>">
                                <p style="text-align: center"><?=$row["description"]?></p><br>
                                <p>
                            </a>

                            </p>
                        </div>
                    </div>
                    <?php
                }
                }
                ?>
                </div>
            </div>
    </body>

</html>
