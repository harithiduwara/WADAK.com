<?php
    session_start();
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
                <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Post Jobs</a></li>
                <?php
                                    }
                                    ?>
                <li class="greenbar"><a href="/WADAK.com/App/view/jobs.php">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/services.php">Services</a></li>

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

        <div class="box">
            <p class="heading">Q&A</p>
            <div class="qa">

                <details>
                    <summary>How register</summary>
                    <h4 class="text">Register in here</h4>
                    <input type="text" placeholder="Type your reply here...">
                    <input type="submit" value="Reply">
                </details>

                <details>
                    <summary>How to register as service provider</summary>
                    <h4 class="text">Register in here</h4>
                    <input type="text" placeholder="Type your reply here...">
                    <input type="submit" value="Reply">
                </details>

                <details>
                    <summary>How register as Hire person</summary>
                    <h4 class="text">Register in here</h4>
                    <input type="text" placeholder="Type your reply here...">
                    <input type="submit" value="Reply">
                </details>

            </div>
        </div>

        <div class="buttons" id="buttonleft" style="text-align:center">
            <a href="Add question.html">
                <button class="button button1">Add Question</button></a>
            <a href="delete question.html">
                <button class="button button2">Delete Question</button></a>
            <a href="delete answer.html">
                <button class="button button3">Delete Answer</button></a>
        </div>



    </body>

</html>
