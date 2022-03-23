<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rate & Review</title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/ratenreview.css">
        <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
    </head>


    <body>
        <!-----------------------------navbar--------------------------------->
        <div class=nav>
            <nav>
                <label class="logo">WADAK</label>
                <ul style="margin-top: 1rem">
                    <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                    <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                    <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

                    <li><a href="/WADAK.com/App/view/messages.php">Messages</a> </li>
                    <?php if(!isset($_SESSION["user"]["userrole"])){?>
                    <li><a href="./login.php"></a></li>
                    <?php }else {?>
                    <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a>
                    </li>
                    <?php } ?>
                    <div class="animation "></div>
                </ul>
            </nav>
        </div>

        <!-------------x---------------navbar----------------x----------------->


        <div class="boxreview">
            <div class="box1">
                <h1>@Username</h1>
            </div>

            <div id="reviewing">
                <ul id="stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                </ul>

                <form action="#" class="formnews">
                    <label id="yourcomplement" for="text">Your Complement!</label><br>
                    <input type="text" id="review" name="review"><br>

                    <input id="submit" type="submit" value="Submit">
                </form>
            </div>

        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="ratenreview.js"></script>
    </body>

</html>
