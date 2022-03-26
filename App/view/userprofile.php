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
            <a href="/WADAK.com/App/view/home.php"><label class="logo">WADAK</label></a>
            <ul style="margin-top: 1rem">
                <?php
                if(isset($_SESSION["user"]["userrole"])){?>
                <li><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
                <?php
                    }
                    ?>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

                <?php if(!isset($_SESSION["user"]["userrole"])){?>

                <li><a href="./login.php">Login</a></li>
                <?php }else {?>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a></li>
                <?php } ?>

            </ul>
        </nav>
        <div class="postcontainer" style="height:120vmin">
            <div class="grid-items" style=" display: grid;
                                            grid-template-columns: 1fr;
                                            grid-gap: 1rem;">

                <hr>
                <div class="cardcontainer">

                    <div class="card">

                        <?php

                        $query2 ="SELECT * FROM register where uid=$uid";

                        $data2 = mysqli_query($con, $query2);
                        
                        $row2 = mysqli_fetch_assoc($data2);
                        ?>
                        <header>
                            <div class="avatar">
                                <img src="<?=$row2["profilePic"]?>" alt="Jhon Doe" id="profilepic" />
                            </div>
                        </header>



                        <h3 class="usernameProfile"><?=$row2["username"]?></h3>
                        <div class="desc">
                            <p><?=$row2["profileDescription"]?>
                            </p>
                        </div>

                        <div class="chat" style="padding:0.5rem">
                            <?php
                        if(isset($_SESSION["user"]["userrole"])){?>
                            <span class="navbargreen"><a href="" target="_blank"><i
                                        class="fa fa-envelope fa-3x"></i></a>

                            </span>
                            <?php
                        }
                        else{?>
                            <span class="navbargreen"><a href="/WADAK.com/App/view/login.php"><i
                                        class="fa fa-envelope fa-3x"></i></a></span>
                            <?php
                        }
                        ?>
                        </div>


                        <footer>
                            <?php
                                $query3 = "SELECT * FROM userLinks where uid = $uid";
                                
                                $data3 = mysqli_query($con, $query3);

                                $row3 = mysqli_fetch_assoc($data3);
                            ?>
                            <?php 
                                if($row3["telegram"]=""){?>
                            <a href="<?=$row3["telegram"]?>" target="_blank"><i class="fa fa-telegram fa-2x"></i></a>
                            <?php
                                }
                            ?>
                            <?php 
                                if($row3["twitter"]=""){?>
                            <a href="<?=$row3["twitter"]?>" target="_blank"><i
                                    class="fa fa-twitter fa-2x"></i></a></i></a>
                            <?php
                                }
                            ?>
                            <?php 
                                if($row3["instagram"]=""){?>
                            <a href="<?=$row3["instagram"]?>" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                            <?php
                                }
                            ?>


                        </footer>
                    </div>

                </div>

            </div>
            <br>
            <br>
            <hr>
            <div class="posts">

                <div>
                    <div style="display:grid; grid-template-columns: 1fr 1fr 1fr 1fr; grid-gap:1rem;
                background-color:white">

                        <?php
                if(mysqli_num_rows($data)>0){
                    while($row = mysqli_fetch_assoc($data)){
                        ?>
                        <div class="sectionheading3" style="background-color:#f1f1fa">
                            <div class="card1" style="margin:1rem"><img src="
                    <?php
                    if($row["filename"]==null){
                        echo "/WADAK.com/App/uploads/noimage.jpg";
                    }
                    else{
                       echo $row["filename"];
                    }
                    ?>
                
                
                " alt="service" style="width:100% ; height:200px; object-fit: cover;">
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
            </div>
    </body>

</html>
