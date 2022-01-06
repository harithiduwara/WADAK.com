<?php 
session_start();

$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
if(!$con){
    die("Connection failed" . mysqli_connect_error());
}

$data = mysqli_query($con, "select * from postjob , register where register.uid = postjob.uid and (title like '%".$_GET["search"]."%' or description like '%".$_GET["search"]."%')");

// print_r($data);


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


        <!----------------------------------Navigation-------------------------------------->
        <header>

            <a href="home.php"><img class="wadaklogo" src="/WADAK.com/App/assets/images/wadak.gif" alt="wadak gif"
                    style="float:left ;width:5rem; height:5%;"></a>
            <nav>
                <ul class="navbar">
                    <?php
                    if(isset($_SESSION["user"]["userrole"])){?>
                    <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Post Jobs</a></li>
                    <?php
                                }
                                ?>

                    <li><a href="/WADAK.com/App/view/services.php">Services</a></li>

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


        <div style="display:grid;grid-template-columns: 1fr 1fr 1fr 1fr;grid-gap:1rem">
            <?php
            if (mysqli_num_rows($data) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($data)) {
                // print_r($row);
            ?>
            <div>
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
                    <h9>
                        <?=$row["username"]?>
                    </h9>
                    <h3><?= $row["title"] ?>
                    </h3><br>
                    <p><?=$row["description"]?></p><br>
                    <p><button style=" background-color:green;"><i class="fa fa-heart"></i></button></p>
                </div>
            </div>

            <?php 
            } 
            } 
            
            else { 
                echo "0 results" ; 
                } 
            ?>


            <script src="./js/Jquery3.4.1.min.js"></script>
            <script src="./js/home.js"></script>
            <script src="./js/owl.carousel.min.js"></script>

    </body>


</html>
