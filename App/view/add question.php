<!Doctype HTML>
<html>

    <head>
        <title>Add question</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/add question.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/job post.php">Add Post</a> </li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a> </li>
                <li><a href="/WADAK.com/App/controller/logout.php">Logout</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>

        <div id="mySidenav" class="sidenav">
            <p class="logo">WADAK <span class="menu">&#9776;</span></p>
            <p class="logo1"> <span class="menu1">&#9776;</span></p>
            <a href="/WADAK.com/App/view/home.php" class="icon-a"><i class="fa fa-home icons"></i> &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/App/view/Q&A.php" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Q&A</a>
        </div>

        <div class="container">
            <div class="wrapper">
                <div class="title"><span>Add Question</span></div>
                <form>
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Enter your question here..">
                    </div>
                    <div class="row button">
                        <input type="submit" value="Add">
                        <input type="submit" value="Cancel">
                    </div>
                </form>
            </div>
        </div>

    </body>

</html>
