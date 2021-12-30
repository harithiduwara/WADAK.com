<?php 
?>


<!Doctype HTML>
<html>

    <head>
        <title>Job post </title>
        <style>
            a {
                text-decoration: none;
            }

        </style>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/job post.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div id="mySidenav" class="sidenav">
            <p class="logo">WADAK <span class="menu">&#9776;</span></p>
            <p class="logo1"> <span class="menu1">&#9776;</span></p>
            <a href="/WADAK.com/Implementation/view/home.php" class="icon-a"><i class="fa fa-home icons"></i>
                &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/Implementation/view/hirepersondashboard.html" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Dashboard</a>
            <a href="/WADAK.com/Implementation/view/previousordershireperson.html" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Job Posts</a>
            <a href="/WADAK.com/Implementation/view/previousordershireperson.html" class="icon-a"><i
                    class="fa fa-tasks icons"></i> &nbsp;&nbsp;Previous Orders</a>

            <a href="/WADAK.com/Implementation/view/previousorders.html" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Service Posts</a>
            <a href="/WADAK.com/Implementation/view/previousorders.html" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Previous Services</a>
            <a href="/WADAK.com/Implementation/view/news2.php" class="icon-a"><i class="far fa-envelope-open"></i>
                &nbsp;&nbsp;News</a>
            <a href="/WADAK.com/Implementation/view/messages.html" class="icon-a"><i class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Messages</a>
            <a href="/WADAK.com/Implementation/view/a.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Achievements</a>
            <a href="/WADAK.com/Implementation/view/leaderboard.html" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Leaderboard</a>
            <a href="/WADAK.com/Implementation/view/askforad.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Advertisements</a>
        </div>


        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Post Job</a> </li>
                <li><a href="#">Jobs</a> </li>
                <li><a href="#">Services</a> </li>
                <li><a href="#">Messages</a> </li>
                <li><a href="/WADAK.com/implementation/controller/logout.php">Logout</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>

        <div class="container">
            <div class="wrapper">
                <div class="title"> Post Job</div>
                <form>
                    <div class="row">
                        <span> Title</span><br><br>
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Your job title">
                        <br><br><span> Description</span><br><br>
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Description">
                        <br><br><span> Budget</span><br><br>
                        <i class="fas fa-user"></i>
                        <input type="number" placeholder="$ 0.00">





                    </div>
                    <br><br><br><br><br><br><br><br><br>
                    <h4>Select Category</h4>
                    <br> <input type="radio" value="Software Development">
                    <label>Software Development</label><br>
                    <br><input type="radio" value="Graphic Designer">
                    <label>Graphic Designer</label><br>
                    <br><input type="radio" value="Video Deiting">
                    <label>Video Editing</label><br>
                    <br><input type="radio" value="Data Scientist">
                    <label>Data Scientist</label><br>
                    <br><img src="add-image.png" style="width:80px; margin-left:40% ;">
                    <br><br> <input type="file" id="myFile" name="filename" style="margin-left:40%;">

                    <br><br>
                    <button class="button button1">Post</button>
                    <button class="button button2">Cancel</button>
                </form>
            </div>
        </div>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

            $(".menu").click(function () {
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

            $(".menu1").click(function () {
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
            $(document).ready(function () {
                $(".profile p").click(function () {
                    $(".profile-div").toggle();

                });
                $(".noti-icon").click(function () {
                    $(".notification-div").toggle();
                });
            });
        </script>
    </body>

</html>
