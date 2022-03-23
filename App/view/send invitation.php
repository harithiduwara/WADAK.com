<!Doctype HTML>
<html>

    <head>
        <title>Send Invitation</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/send invitation.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <?php
                if(isset($_SESSION["user"]["userrole"])){?>
                <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
                <?php
                }
                ?>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>
                <?php if(isset($_SESSION["user"]["userrole"])){?>

                <li><a href="/WADAK.com/App/view/leaderboard.php">Leaderboard</a> </li>
                <li><a href="/WADAK.com/App/view/chat.php">Messages</a> </li>
                <li><a href="/WADAK.com/implementation/controller/logout.php">Logout</a> </li>
                <?php }else {?>

                <div class="animation "></div>
            </ul>
        </nav>



        <div class="container">
            <div class="wrapper">
                <div class="title"><span>Send Invitation</span></div>
                <form>
                    <img src="programmer.png" alt="user image" class="center"
                        style="width:50px;height:50px; align-items:center;">
                    <div class="row">
                        <span>Title </span><br><br>
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Enter title"><br><br>
                        <span>Description </span><br><br>
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Description"><br><br>
                    </div>
                    <br>
                    <div class="row button">
                        <input type="submit" value="Invite">

                    </div>
                </form>
            </div>
        </div>

    </body>

</html>
