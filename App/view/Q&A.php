<?php
    session_start();
    $con = mysqli_connect('localhost', 'toor', 'toor', 'wadak');
    if(!$con){
        die("Connection failed" . mysqli_connect_error());
    }
    
    $result = "SELECT question,answer FROM faq";

    $data = mysqli_query($con, $result);
?>

<!DOCTYPE html>
<html>

    <head>
        <title>
            Q&A
        </title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/Q&A.css">
    </head>

    <body>

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
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>>


                <?php if(!isset($_SESSION["user"]["userrole"])){?>

                <li><a href="./login.php">Login</a></li>
                <?php }else {?>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a>
                </li>
                <?php } ?>


            </ul>
        </nav>

        <br><br>
        <form method="POST" action="/WADAK.com/App/model/add_question.php" name="questionform"
            onsubmit="return validateForm()" required>
            <input type="text" name="question" placeholder="Enter your question here.."
                style="width:50%; margin-left:300px;">
            <input type="submit" value="Add Question" name="add"
                style="width:150px; height:30px;cursor: pointer;font-size:15px">
        </form>

        <div class="box">
            <p class="heading">Q&A</p>
            <div class="qa">


                <?php
	             $i=0;
	             while($row = mysqli_fetch_array($data)) {
	          ?>
                <tr class="<?php if(isset($classname)) echo $classname;?>">
                    <?php #echo $row["question"]; ?>

                    <!--<a href="/WADAK.com/App/model/deletenews.php?id=<?php #echo $row["question_id"]; ?>">Delete</a>-->

                </tr>


                <details>
                    <summary><?php echo $row["question"]; ?></summary>
                    <h4><?php echo $row["answer"]; ?></h4>
<<<<<<< Updated upstream
                    <form method="POST" action="/WADAK.com/App/model/add_answer.php">
                        <input type="text" placeholder="Type your reply here..." name="answer">
                        <input type="submit" value="Reply" name="reply">
                </details>

                <!--<details>
                    <summary><?php #echo $row["question"]; ?></summary>
                    <h4 class="text">Register in here</h4>
                    <input type="text" placeholder="Type your reply here...">
                    <input type="submit" value="Reply">
                </details>

                <details>
                    <summary><?php# echo $row["question"]; ?></summary>
                    <h4 class="text">Register in here</h4>
                    <input type="text" placeholder="Type your reply here...">
                    <input type="submit" value="Reply">
                </details>-->
=======
                    <form method="POST" action="/WADAK.com/App/model/add_answer.php">  
                    <input type="text" placeholder="Type your reply here..." name="answer">
                    <input type="text" placeholder="Type your question id here..." name="question_id">
                    <input type="submit" value="Reply" name="reply" >
                    <!--<a href="/WADAK.com/App/model/add_answer.php?id=<?php# echo $row["question_id"]; ?>"> </a> -->
                </details>
                
>>>>>>> Stashed changes

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
