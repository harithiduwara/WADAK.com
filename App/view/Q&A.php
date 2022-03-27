<?php
    session_start();
    $con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
    if(!$con){
        die("Connection failed" . mysqli_connect_error());
    }
    
    $result = "SELECT question_id, question, answer FROM faq";

    $data = mysqli_query($con, $result);
?>



<!DOCTYPE html>
<html>

    <head>
        <title>
            FAQ
        </title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/Q&A.css">
        <style>
        body {
            background-image: url('/WADAK.com/App/assets/images/question.jpg');
           
             }
</style>
    </head>

    <body>

        <!--<nav>
            <label class="logo">WADAK</label>
            <ul class="navbar">
                <?php
               # if(isset($_SESSION["user"]["userrole"])){?>
                <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
                <?php
                 # }
                ?>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>


                <?php# if(!isset($_SESSION["user"]["userrole"])){?>

                <li><a href="./login.php">Login</a></li>
                <?php #}else {?>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a>
                </li>
                <?php #} ?>


            </ul>
        </nav>-->
   <!-- Add Question-->
        <br>
        <form method="POST" action="/WADAK.com/App/model/add_question.php" name="questionform"
            onsubmit="return validateForm()" required>
            <h4 style="margin-left:360px;">Question</h4>
            <input type="text" name="question" placeholder="Enter your question here.."
                style="width:50%; margin-left:300px; margin-left:360px;">
            <h4 style="margin-left:360px;">Answer</h4>   
            <textarea id="answer" name="answer" style="width:50%; margin-left:250px; margin-left:360px;"  rows="4" cols="50"> </textarea>    
            <br><br>
            <input type="submit" value="Add Question" name="add"
                style="width:150px; height:30px;cursor: pointer;font-size:15px; margin-left:360px;">
        </form>

        <div class="box">
            <p class="heading">Q&A</p>
            <div class="qa">


                <?php
	             $i=0;
	             while($row = mysqli_fetch_array($data)) {
	          ?>
                <tr class="<?php if(isset($classname)) echo $classname;?>">
                    <?php #echo $row["question_id"]; ?>
                </tr>

         <!-- Add Answer-->
                <details>
                    <summary><?php echo $row["question"]; ?></summary>
                    <h4><?php echo $row["answer"]; ?></h4>
                </details>
                
                <?php
	           $i++;
	           }
	          ?>
            </div>
        </div>


        <script>
        function validateForm() {
            var x = document.forms["questionform"]["question"].value;
            if (x == "") {
                alert("date must be filled out");
                return false;
            }
        }
        </script>
    </body>

</html>
