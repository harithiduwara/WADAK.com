<!Doctype HTML>
<html>

    <head>
        <title>Accept/Reject Invitation</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/accept reject invitation.css" type="text/css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <div id="mySidenav" class="sidenav">
            <p class="logo">WADAK <span class="menu">&#9776;</span></p>
            <p class="logo1"> <span class="menu1">&#9776;</span></p>
            <a href="/WADAK.com/App/view/home.php" class="icon-a"><i class="fa fa-home icons"></i>
                &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/App/view/hirepersondashboard.php" class="icon-a"><i
                    class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Dashboard</a>
            <a href="/WADAK.com/App/view/previousordershireperson.php" class="icon-a"><i
                    class="fa fa-tasks icons"></i> &nbsp;&nbsp;Previous Orders</a>
            <a href="/WADAK.com/App/view/appliedservices.php" class="icon-a"><i
                    class="fa fa-tasks icons"></i>
                &nbsp;&nbsp;Applied Services</a>
            <a href="/WADAK.com/App/view/news2.php" class="icon-a"><i class="far fa-envelope-open"></i> &nbsp;&nbsp;News</a>
            <a href="/WADAK.com/App/view/accept reject invitation.php" class="icon-a"><i class="fa fa-envelope icons"></i>
                &nbsp;&nbsp;Invitations</a>

        </div>





        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/Add achievement post - Service provider.php">Post Job</a> </li>
                <li><a href="/WADAK.com/App/view/jobs.php">Jobs</a> </li>
                <li><a href="/WADAK.com/App/view/catagorymain.php">Services</a> </li>
                <li><a href="/WADAK.com/App/view/leaderboard.php">Leaderboard</a></li>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a> </li>
                <li><a href="/WADAK.com/App/controller/logout.php">Logout</a> </li>

                <!-- <li><a href="#">Login</a> </li> 
            No need a login right!-->
                <div class="animation "></div>
            </ul>
        </nav>


        <div class="container">
            <div class="wrapper">
                <div class="title"><span>Job Invitation</span></div>
                <form>
                    <img src="programmer.png" alt="user image" class="right"
                        style="width:50px;height:50px; align-items:center;">
                    <div class="row">
                        <span>Title </span><br><br>
                        <span>Description </span><br><br>
                        <span>Budget </span><br><br>
                    </div>

                    <div class="buttons">
                        <br> <button class="button button1" onclick="myFunction()">Accept</button>
                        <button class="button button2" onclick="myFunction2()">Reject</button>
                    </div>
                    <p id="demo" style="color: forestgreen;"></p>
            </div>
            </form>
        </div>
        </div>


        <script>
        function myFunction() {
            var txt;
            if (confirm("Are you sure?")) {
                txt = "You accepted the invitation!";
            } else {
                txt = "You pressed Cancel!";
            }
            document.getElementById("demo").innerHTML = txt;
        }


        function myFunction2() {
            var txt;
            if (confirm("Are you sure?")) {
                txt = "You rejected the invitation!";
            } else {
                txt = "You pressed Cancel!";
            }
            document.getElementById("demo").innerHTML = txt;
        }
        </script>

    </body>

</html>
