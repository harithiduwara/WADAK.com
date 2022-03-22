<!Doctype HTML>
<html>

    <head>
        <title>User Profile</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/userprofile.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>

        <header>
            <!-- <img class="wadaklogo" src="/WADAK.com/App/assets/images/wadak.gif" alt="wadak gif"
                style="float:left; width:5%; height:5%"> -->
            <a href="/WADAK.com/App/view/home.php"> <label style=" color: green;
                                                                    font-size: 2rem;
                                                                    line-height: 80px;
                                                                    padding: 0 100px;
                                                                    font-weight: bold;">WADAK</label></a>
            <nav>
                <ul class="navbar">
                    <?php
                        if(isset($_SESSION["user"]["userrole"])){?>
                    <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Post Jobs</a></li>
                    <?php
                    }
                    ?>
                    <li class="greenbar"><a href="jobs.php">Jobs</a></li>
                    <li><a href="/WADAK.com/App/view/services.php">Services</a></li>

                    <?php if(!isset($_SESSION["user"]["userrole"])){?>

                    <li><a href="./login.php">Login</a></li>
                    <?php }else {?>
                    <li><i class="far fa-bell"></i></li>
                    <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                    <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a></li>
                    <?php } ?>


                </ul>

                <!-- <ul>Hello
                    <?php //echo $_SESSION["user"]["username"] ?>
                </ul> -->
            </nav>
        </header>



        <div class="card">

            <img src="profile.png" alt="user" style="width:50%">
            <h1>User Name</h1>
            <p class="title">user@email.com</p>
            <p>Member since 2021</p>


            <span class="rate">Rating and Reviews</span>&nbsp;&nbsp;&nbsp;<br><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span><br>

            <a href="send invitation.html">
                <input type="submit" value="Invite"></a>

            <p><button> <a href="#"> Contact</a> </button></p>
        </div>




        <!--
        <div class="card2">
          <img src="code.png" alt="service" style="width:100%">
          <h1>Title</h1>
          <p>I will code program or buld applications in java</p>
          <p><button><i class="fa fa-heart" style="margin-left:200px;"></i></button></p>
        </div>


        <div class="card3">
          <img src="code.png" alt="service" style="width:100%">
          <h1>Title</h1>
          <p>I will write code in c or c++</p>
          <p><button><i class="fa fa-heart" style="margin-left:200px;"></i></button></p>
          
        </div>
      -->

        <br>
        <h3 style="margin-left: 200px;">More Services By User</h3>

        <div class="row">
            <div class="column">
                <div class="card1"><img src="code.png" alt="service" style="width:100% ; height:200px">
                    <h3>Title</h3>
                    <p>I will code program or buld applications in java</p>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>

            <div class="column">
                <div class="card1"><img src="download.jpg" alt="service" style="width:100%; height:200px">
                    <h3>Title</h3>
                    <p>I will write code in c or c++ and build applications</p>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>

            <div class="column">
                <div class="card1"><img src="database.jpg" alt="service" style="width:100%; height:200px">
                    <h3>Title</h3>
                    <p>I will create your databases erp CRM or management systems</p>
                    <p><button style="background-color:green;"><i class="fa fa-heart"
                                style="margin-left:200px;"></i></button></p>
                </div>
            </div>
        </div>

        <!--ratings-->






    </body>

</html>
