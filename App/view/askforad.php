<?php
    session_start();
?>


<!Doctype HTML>
<html>

    <head>
        <title>Apply for Advertisement </title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/ask for ad.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div id="mySidenav" class="sidenav">
            <p class="logo">WADAK <span class="menu">&#9776;</span></p>
            <p class="logo1"> <span class="menu1">&#9776;</span></p>

            <a href="/WADAK.com/App/view/home.php" class="icon-a"><i class="fa fa-home icons"></i>
                &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/App/view/hirepersondashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Dashboard</a>
            <?php
            if(isset($_SESSION["user"]["userrole"])){
            ?> <a href="/WADAK.com/App/view/messages.php" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Messages</a>
            <?php } ?>

            <a href="/WADAK.com/App/view/messages.php" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Messages</a>
            <a href="/WADAK.com/App/view/leaderboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Leaderboard</a>
            <a href="/WADAK.com/App/view/news2.php" class="icon-a"><i class="far fa-envelope-open"></i>
                &nbsp;&nbsp;News</a>


        </div>


        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="home.php" class="active">Home</a></li>
                <?php
                if(isset($_SESSION["user"]["userrole"])){?>
                <li class="navbargreen"><a href="/WADAK.com/Implementation/view/postjob.html">Add Post</a></li>
                <?php
                    }
                    ?>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

                <?php if(!isset($_SESSION["user"]["userrole"])){?>

                <li><a href="./login.php">Login</a></li>
                <?php }else {?>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/Implementation/view/messages.html">Messages</a></li>
                <li><a href="/WADAK.com/Implementation/view/hirepersondashboard.html"><i class="fas fa-user"></i></a>
                </li>
                <?php } ?>

                <div class="animation "></div>
            </ul>
        </nav>

        <div class="container">
            <div class="wrapper">
                <div class="title"> Ask for Advertisement</div>
                <form>
                    <div class="row">
                        <span> Title</span><br><br>
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Enter title">
                        <br><br><span> Description</span><br><br>
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Description">

                    </div> <br><br><br>
                    <button class="button button1">Apply</button>
                </form>
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
