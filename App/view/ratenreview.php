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
            <nav class="navclass">
                <ul id="navbar">
                    <li id="navbargreen"><a href="/WADAK.com/App/view/Add achievement post - Service provider.php">Post
                            Jobs</a></li>
                    <li class="greenbar"><a href="#">Jobs</a></li>
                    <li><a href="/WADAK.com/App/view/serices.php">Services</a></li>
                    <li><i class="far fa-bell"></i></li>
                    <li><a href="/WADAK.com/App/view/leaderboard.php">Leaderboard</a></li>
                    <li><a href="/WADAK.com/App/view/chat.php">Messages</a></li>
                    <li><a href="/WADAK.com/implementation/controller/logout.php">Logout</a></li>
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
