<!DOCTYPE html>
<html>

    <head>
        <title>
            view service providers-hire person
        </title>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/view service providers- hire person.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul style="margin-top: 1rem">
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
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a></li>
                <?php } ?>


            </ul>
        </nav>

        <!--1st container-->
        <div class="container">
            <div class="wrapper">

                <form>
                    <img src="programmer.png" alt="user image" class="right"
                        style="width:50px;height:50px; align-items:center;">
                    <div class="row">
                        <span>Name </span><br><br>
                        <span>Category </span><br><br>
                        <span>Telephone Number </span><br><br>
                    </div>

                    <div class="buttons">
                        <br> <button class="button button1"> <a href="user profile.html">View Profile</button> </a>
                    </div>

            </div>
            </form>
        </div>

        <!--2 container-->
        <div class="container">
            <div class="wrapper">

                <form>
                    <img src="girl.png" alt="user image" class="right"
                        style="width:50px;height:50px; align-items:center;">
                    <div class="row">
                        <span>Name </span><br><br>
                        <span>Category </span><br><br>
                        <span>Telephone Number </span><br><br>
                    </div>

                    <div class="buttons">
                        <br> <button class="button button1"><a href="user profile.html">View Profile</button></a>

                    </div>

            </div>
            </form>
        </div>

        <!--3 container-->
        <div class="container">
            <div class="wrapper">

                <form>
                    <img src="programmer.png" alt="user image" class="right"
                        style="width:50px;height:50px; align-items:center;">
                    <div class="row">
                        <span>Name </span><br><br>
                        <span>Category </span><br><br>
                        <span>Telephone Number </span><br><br>
                    </div>

                    <div class="buttons">
                        <br> <button class="button button1"><a href="user profile.html">View Profile</button></a>

                    </div>

            </div>
            </form>
        </div>

    </body>

</html>
