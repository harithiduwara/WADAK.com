<?php

session_start();

$uid = $_SESSION["user"]['uid'];
$postType = $_GET["postType"] ?? "job";
// var_dump($_SESSION["user"]['uid']);
$con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}

$jobid = $_GET["jobid"];

$query = "SELECT * FROM register WHERE uid=$uid";
$data = mysqli_query($con, $query);
$userData = mysqli_fetch_assoc($data);

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <style>
        a {
            text-decoration: none;
        }
        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/rating.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
        <title>Rating</title>
        
    </head>

    <body>

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

        <div class="container" >
            <div class="wrapper">
                <div class="title">Rate Service</div>
                <form action="/WADAK.com/App/model/insert_rating.php" method="post" style="height:60vh">
                <div class="row">
                  
                  <input type="text" name="name" placeholder="Your name..." value="<?=$userData["name"]?>"><br> <br>
                  
                  <input type="text" name="comment" placeholder="Let's us know your experience..." style="text-align:center"><br><br>
                  <div class="rateyo" id= "rate"
                   data-rateyo-rating="4"
                   data-rateyo-num-stars="5"
                   data-rateyo-score="3">
                 </div><br>
                 <span class='result'>0</span><br>
                 <input type="hidden" name="rate"><br>
                 <input type="hidden" name="jobId" value="<?=$jobid?>"> <br>
                 
                </div><br><br><br><br><br><br>
                <a href="/WADAK.com/App/view/postjob.php?raterId=<?=$row["uid"]?>">
                <input type="submit" name="add" value="Post" class=" button button1"> 
               </form>
            </div>
        </div>            
            
        

         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rate :'+ rating);
            $(this).parent().find('input[name=rate]').val(rating); //add rating value to input field
        });
    });
 
</script>
    </body>

</html>

        

            