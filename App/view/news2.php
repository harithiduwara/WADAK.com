<?php
    session_start();
?>
<!Doctype HTML>
<html>

    <head>
        <title>News</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/news2.css" type="text/css" />
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/categorymain.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/navigationBar.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/toggle.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/owl.carousel.min.css">
        <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav>
            <label class="logo">WADAK</label>
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

        <!-- news containers -->
        <div class="HelloNews" style="text-align:center">
            <h1 style="margin-top:12px; color:#6c7293;"> News</h1>
            <table>
                <!--php code-->
                <?php
                require_once("newsconfig.php");
                $sql ="SELECT date,description FROM news";
                $result = mysqli_query($conn,$sql);
                $out = "";
                while($data=$result->fetch_assoc()){
                    $out .=  "<tr> <td> <img src='/WADAK.com/App/assets/images/online.png' class='image' style='width:50px;height:50px;''" .  "</td><td>"   .$data['date'].   "</td><td>"  .$data['description']. "</td></tr>";
                }
                echo $out;
          ?>
        </div>
    </body>

</html>
