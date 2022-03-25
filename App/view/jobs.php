<?php 
session_start();

$postType = $_GET["postType"]??"job";

$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
if(!$con){
    die("Connection failed" . mysqli_connect_error());
}

    $query = "select * from postjob , register where postType='".$postType."' and (register.uid = postjob.uid and (title like '%".$_GET["search"]."%' or description like '%".$_GET["search"]."%' or address like '%".$_GET["search"]."%'))";

    $data = mysqli_query($con, $query);

    

?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wadak.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/categorymain.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/navigationBar.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/toggle.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/owl.theme.default.min.css">

        <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <!-- <?="$query"?>; -->

        <!----------------------------------Navigation-------------------------------------->
        <header>

            <a href="/WADAK.com/App/view/home.php"> <label style=" color: green;
                                                                    font-size: 2rem;
                                                                    line-height: 80px;
                                                                    padding: 0 100px;
                                                                    font-weight: bold;">WADAK</label></a>
            <nav>
                <ul class="navbar" style="background-color:white">
                    <?php
                        if(isset($_SESSION["user"]["userrole"])){?>
                    <li><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
                    <?php
                    }
                    ?>
                    <?php 
                    if($postType=="job"){?>
                    <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>
                    <?php }
                    else{ ?>
                    <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                    <?php }
                    ?>


                    <?php if(!isset($_SESSION["user"]["userrole"])){?>

                    <li><a href="./login.php">Login</a></li>
                    <?php }else {?>
                    <li><i class="far fa-bell"></i></li>
                    <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                    <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a></li>
                    <?php } ?>


                </ul>
            </nav>

        </header>



        <!-----------------x----------------Navigation-------------------x------------------>


        <!-------------------------------------searchbar------------------------------------->



        <div class="topnav">

            <a href="#about"></a>
            <a href="#contact"></a>
            <a class="active" href="#"></a>
            <label class="switch">
                <input type="checkbox">
                <span class="sliderround"></span>
            </label>
            <form>
                <input type="text" name="search" placeholder="Find Service..">

                <button style="height:2.5rem"> Search</button>
            </form>
        </div>


        <!------------------x------------------searchbar-------------------x----------------->



        <!-------------------x------------------boxes------------------------x------------------->

        <!----------------------------------footer--------------------------------------->


        <div style="display:grid;grid-template-columns: 1fr 1fr 1fr 1fr;grid-gap:1rem; text-align:center">
            <?php
            if (mysqli_num_rows($data) > 0) {

            while($row = mysqli_fetch_assoc($data)) {
          
            ?>
            <div>
                <div class="card1" style="margin:1rem; background-color:#f1f1f1"><a
                        href="/WADAK.com/App/view/jobpostview.php?jobid=<?=$row["jobid"]?>"><img src="
                    <?php
                    if($row["filename"]==null){
                        echo "/WADAK.com/App/uploads/noimage.jpg";
                    }
                    else{
                       echo $row["filename"];
                    }
                    ?>
                
                
                " alt="service" style="width:100% ; height:200px; object-fit: cover; text-align:end !important;">

                        <h9>
                            <?=$row["username"]?>
                        </h9>
                    </a>

                    <a href=" /WADAK.com/App/view/jobpostview.php?jobid=<?=$row["jobid"]?>">
                        <h3 style="font-size:1.5rem; color:green"><?= $row["title"] ?>
                        </h3>
                    </a>
                    <br><a href="/WADAK.com/App/view/jobpostview.php?jobid=<?=$row["jobid"]?>">
                        <p><?=$row["description"]?></p>
                    </a><br>

                    <div>
                        <p><?php echo "Price : " . $row["budget"]?></p>
                        <div style="margin-top:1rem; color:green">
                            <!-- <a href="/WADAK.com/App/controller/views.php?jobid=<?=$row["jobid"]?>"><button
                                    style="background-color:green;">
                                    <i class="fa fa-heart"></i></button></p>
                            </a> -->
                            <p><?=$row["views"]?> Views</p>
                        </div>


                    </div>

                </div>
            </div>

            <?php 
            } 
            } 
            
            else { 
                echo "No result found....." ; 
                } 
            ?>


            <script src="./js/Jquery3.4.1.min.js"></script>
            <script src="./js/home.js"></script>
            <script src="./js/owl.carousel.min.js"></script>

    </body>


</html>
