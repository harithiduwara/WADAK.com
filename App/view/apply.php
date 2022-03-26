<?php
    session_start();

    $jobid = $_GET["jobid"];

    $uid = $_SESSION["user"]['uid'];

    $con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');

    if(!$con){
        die("Connection failed" .mysqli_connect_error());
        }

    $query = "SELECT * from postjob where jobid=$jobid";

    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_assoc($result);

    $query1 = "SELECT username from register where uid = ' ".$row["uid"]." '";

    $result1 = mysqli_query($con, $query1);

    $row1 = mysqli_fetch_assoc($result1);

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> <?= $row["postType"] ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/apply.css">
    </head>

    <body>

        <?=$row["jobid"]?>
        <nav>
            <label class="logo">WADAK</label>
            <ul class="navbar">
                <?php
                    if(isset($_SESSION["user"]["userrole"])){?>
                <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
                <?php
                    }
                    ?>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>

                <?php if(!isset($_SESSION["user"]["userrole"])){?>

                <li><a href="./login.php">Login</a></li>
                <?php }else {?>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a></li>
                <?php } ?>
            </ul>
        </nav>



        <div class="container">
            <div class="title">
                <h4>
                    <?php
                    echo strtoupper($row["title"]) . " by " . $row1["username"];
                    ?>
                </h4>
            </div><br>

            <form action="/WADAK.com/App/controller/applyController.php" method="post">

                <div class="job-details">
                    <input type="hidden"  value="<?=$row["jobid"]?>" name="jobid">
                    <div class="input-box" style="text-align:center">
                        <span class="details">Description</span>
                        <input type="text" style="text-align:center" name= "description"placeholder="Your description here....." id="des" required>
                    </div>

                    <div class="input-box" style="text-align:center">
                        <span class="details">Budget</span>
                        <input type="number" min="1000" style="text-align:center" name= "newbudget" placeholder='<?=$row["budget"]?>' required>
                    </div>

                </div>


                <br><br>


                <div class="button" id="btn">
                    <input type="button" onclick="history.back()"value="Cancel" id="red">
                    <input type="submit" value="Apply" id="green">
                </div>

            </form>
        </div>
        </div>

    </body>

</html>







































<!-- <body>

        -----------------------------nav bar ------------------------------------- 

        <nav>
            <a href="home.html"><img class="wadaklogo" src="wadak.gif" alt="wadak gif"
                    style="float:left width:5% height:5%"></a>
            <ul style="margin-top: 1rem">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Post Job</a> </li>
                <li><a href="#">Jobs</a> </li>
                <li><a href="#">Services</a> </li>
                <li><a href="#">Messages</a> </li>
                <li><a href="#">Profile</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>

        <div class="container">
            <div class="applyform" id="applybox">
                <h1>Post Job</h1>
                <div id="form">
                    <form action="#">
                        <div class="inputbox">
                            <span class="jobtitle">Job</span>
                            <input type="text" placeholder="Your Job Title">
                        </div>

                        <div class="inputbox">
                            <span class="discription"> Description</span>
                            <input type="text" placeholder="Enter Your Job Details">
                        </div>

                        <div class="inputbox">
                            <span class="budget">Budget</span>
                            <input type="text" placeholder="$0.00">
                        </div>

                        <div class="tags">
                            <span class="tags">Tags</span>
                            <input type="text" placeholder="It will helps you to more reach.">
                        </div>

                        <form action="#">
                            <input list="jobcatagory" name="jobcatagory">
                            <datalist id="jobs">
                                <option value="Web Development">
                                <option value="Web Development">
                                <option value="Web Development">
                                <option value="Web Development">
                            </datalist>
                            <input type="submit" value="Submit" id="submitbutton">
                        </form>
                    </form>
                </div>
            </div>
        </div>




  --------------x--------------nav bar ----------------x----------------- 

        <script src="" async defer></script>
    </body> -->

</html>
