<!Doctype HTML>
<html>

    <head>
        <title>Achievements</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/news2.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/Add achievement post - Service provider.php">Post Job</a> </li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>
                <!-- <li><a href="#">Leaderboard</a></li>-->
                <!--<li><i class="far fa-bell"></i></li>-->
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a> </li>
                <li><a href="/WADAK.com/App/controller/logout.php">Logout</a> </li>

                <!-- <li><a href="#">Login</a> </li> 
            No need a login right!-->
                <div class="animation "></div>
            </ul>
        </nav>



        <!-- news containers -->

        <h1 style="margin-top:12px; margin-left:100px; color:#6c7293;"><a href="/WADAK.com/App/view/achievemts.php">
                Achievements</a></h1>



        <table>
            <!--php code-->
            <?php
                $servername = "localhost";
                $username = "toor";
                $password = "toor";
                $database = "wadak";

                $connection = mysqli_connect($servername,$username,$password,$database);

                // Check connection
                if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
            }

            $sql ="SELECT Name,Place,Date,A_ID FROM achievements";
                $result = mysqli_query($connection,$sql);
                $out = "";

                while($data=$result->fetch_assoc()){
                    $out .=  "<tr> <td> <img src='cuplogo.png' class='image' style='width:50px;height:50px;''" .  "</td><td>"   .$data['Name'].   "</td><td>"  .$data['Place']. "</td><td>".$data['Date']."</td></tr>";
                }
                echo $out;
          ?>
    </body>

</html>
