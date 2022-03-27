<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>leaderboard</title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/leaderboard.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/categorymain.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/navigationBar.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/toggle.css">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/owl.carousel.min.css">
        <script src="https://kit.fontawesome.com/553d46dead.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav style="height:10vh">
            <a href="/WADAK.com/App/view/home.php"> <label class="logo">WADAK</label></a>
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
        </br>

        <div class="box1">
            <p class="name" style="padding: 2rem 1rem 2rem 1rem">Leaderboard</p>

        </div>
        </br>

        <div class="wrapper">
            
            <div class="right" >
                <div class="info">

                    <?php
                    include_once 'cataconfig.php';
                    $result = mysqli_query($conn,"SELECT id, name,rate FROM star_rating ORDER BY rate DESC");
                    ?>

                    <table>
                        <tr>
                            <th>Rank</th>
                            <th>User Id</th>
                            <th>User Name</th>
                            <th>Rate</th>
                        </tr>
                        
                        <?php
                        $ranking = 1;
                        while($row = mysqli_fetch_array($result)) {
                        ?>

                        <tr class="<?php if(isset($classname)) echo $classname;?>">
                            <!--<form action="" method="POST" role = "form">-->
                            <td><?php echo $ranking; ?></td>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["rate"]; ?></td>

                        </tr>

                        <?php
                        $ranking++;
                        }
                        ?>
                       

                    </table>

                </div>
            </div>

            


        </div>
        </div>



    </body>

</html>
