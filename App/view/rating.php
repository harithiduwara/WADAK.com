<!Doctype HTML>
<html>
<head>
    <link rel="stylesheet" href="/WADAK.com/App/assets/css/rating.css" type="text/css" />
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
--><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>
<body>




        
    <form action="/WADAK.com/App/model/insert_rating.php" method="post">
         <h4>Name</h4>
        <input type="text" name="name">
    
    <br>
     
         <h4>Comment</h4>
        <input type="text" name="comment">
        <br><br>
    
         <div class="rateyo" id= "rate"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
    <span class='result'>0</span>
    <br>
    <input type="hidden" name="rate">
 
    
   <br>
    <input type="submit" name="add"> 
    

    
    
 
</form>
                
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

       
        

            