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

        <div class="container">
            <div class="wrapper">
                <div class="title">Rate Our Service</div>
                <form action="/WADAK.com/App/model/insert_rating.php" method="post">
                <div class="row">
                  
                  <input type="text" name="name" placeholder="Your name..."><br><br><br>
                  
                  <input type="text" name="comment" placeholder="Tell us your comment..."><br><br>
                  <div class="rateyo" id= "rate"
                   data-rateyo-rating="4"
                   data-rateyo-num-stars="5"
                   data-rateyo-score="3">
                 </div><br>
                 <span class='result'>0</span><br>
                 <input type="hidden" name="rate"><br>

                </div><br><br><br><br><br><br>
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

        

            