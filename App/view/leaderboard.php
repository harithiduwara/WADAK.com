<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Add achievement post</title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/leaderboard.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/categorymain.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/navigationBar.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/toggle.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/owl.carousel.min.css">
        <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav style="height:10vh">
            <a href="/WADAK.com/App/view/home.php"><label class="logo">WADAK </label></a>
            <ul class="navbar">
                <?php
                        if(isset($_SESSION["user"]["userrole"])){?>
                <li><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
                <?php
                    }
                    ?>

                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>



                <?php if(!isset($_SESSION["user"]["userrole"])){?>

                <li><a href="./login.php">Login</a></li>
                <?php }else {?>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a></li>
                <?php } ?>


            </ul>
        </nav>
        </br>

        <div class="box1">
            <p class="name" style="padding: 2rem 1rem 2rem 1rem">Leaderboard</p>

        </div>
        </br>

        <div class="wrapper">
            <div class="left">
                <h2>1st Rank</h2>
                <img src="sp.png" width="325" height="335">
                <h4>SS Malsha</h4>
                <p>UI Developer</p>
                <p>Reviews : 1500</p>
                <p>Stars : 4.7</p>
            </div>
            <div class="right">
                <div class="info">

                    <table>
                        <tr>
                            <th>2nd Rank</th>
                            <th><img src="sp.png" width="80px" height="80px"></th>
                            <th>Name2</th>
                            <th>Reviews : 1450</th>
                            <th>Stars : 4.2</th>
                        </tr>
                        <tr>
                            <th>3rd Rank</th>
                            <th><img src="sp.png" width="80px" height="80px"></th>
                            <th>Name3</th>
                            <th>Reviews : 1430</th>
                            <th>Stars : 4.0</th>
                        </tr>
                        <tr>
                            <th>4th Rank</th>
                            <th><img src="sp.png" width="80px" height="80px"></th>
                            <th>Name4</th>
                            <th>Reviews : 1393</th>
                            <th>Stars : 3.8</th>
                        </tr>
                        <tr>
                            <th>5th Rank</th>
                            <th><img src="sp.png" width="80px" height="80px"></th>
                            <th>Name5</th>
                            <th>Reviews : 1388</th>
                            <th>Stars : 3.8</th>
                        </tr>
                        <tr>
                            <th>6th Rank</th>
                            <th><img src="sp.png" width="80px" height="80px"></th>
                            <th>Name6</th>
                            <th>Reviews : 1345</th>
                            <th>Stars : 3.7</th>
                        </tr>

                    </table>

                </div>
            </div>

            <div class="projects">

            </div>


        </div>
        </div>



    </body>

</html>
