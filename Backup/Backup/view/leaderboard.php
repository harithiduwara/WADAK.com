<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>leaderboard</title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/leaderboard.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <nav>
            <label class="logo"><a href="/WADAK.com/App/view/home.php">WADAK</a></label>
            <ul>
                <?php
                        if(isset($_SESSION["user"]["userrole"])){?>
                <li><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
                <?php
                    }
                    ?>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

                <?php
                        if(isset($_SESSION["user"]["userrole"])){?>
                <li><a href="/WADAK.com/App/controller/logout.php">Logout</a> </li>
                <?php
                    }
                    ?>
                <div class="animation "></div>
            </ul>
        </nav>
        </br>

        <div class="box1">
            <p class="name">Leaderboard</p>

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
