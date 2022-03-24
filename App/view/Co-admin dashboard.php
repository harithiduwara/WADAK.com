<!Doctype HTML>
<html>

    <head>
        <title>Co-Admin Dashboard</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/Co-admin%20bashboard.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>
        <div id="mySidenav" class="sidenav">
            <p class="logo">WADAK <span class="menu">&#9776;</span></p>
            <p class="logo1"> <span class="menu1">&#9776;</span></p>
            <a href="/WADAK.com/App/view/home.php" class="icon-a"><i class="fa fa-home icons"></i> &nbsp;&nbsp;Home</a>
            <a href="/WADAK.com/App/view/Co-admin dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
                &nbsp;&nbsp;Dashboard</a>
            <a href="/WADAK.com/App/view/viewServiceProvider2-coadmin.php" class="icon-a"><i
                    class="fa fa-users icons"></i>
                &nbsp;&nbsp;Service Providers</a>

            <a href="/WADAK.com/App/view/Q&A.php" class="icon-a"><i class="fa fa-question-circle icons"></i>
                &nbsp;&nbsp;Q & A Session</a>
            <a href="/WADAK.com/App/view/messages.php" class="icon-a"><i class="fa fa-comment icons"></i>
                &nbsp;&nbsp;Chat</a>
            <a href="/WADAK.com/App/view/News.php" class="icon-a"><i class="fa fa-newspaper-o icons"></i>
                &nbsp;&nbsp;News</a>
            <!--<a href="#"class="icon-a"><i class="fa fa-bell icons"></i> &nbsp;&nbsp;Notification</a>-->
        </div>

        <div id="main">
            <div class="head">
                <div class="col-div-6">
                    <p class="nav"> Dashboard</p>

                </div>

                <div class="col-div-6">
                    <i class="fa fa-search search-icon"></i>

                    <i class="fa fa-bell noti-icon"></i>
                    <div class="notification-div">
                        <p class="noti-head">Notification </p>
                        <hr class="hr" />
                        <p>You have new report
                            <span>alert </span>
                        </p>
                    </div>

                    <div class="profile">

                        <p>Co-Admin Name <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                        <div class="profile-div">
                            <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a
                                    href="/WADAK.com/App/view/CoAdmin-profile.php">Profile</a></p>
                            <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a
                                    href="/WADAK.com/App/view/Co-admin dashboard.php">Dashboard</a> </p>
                            <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;<a
                                    href="/WADAK.com/App/controller/logout.php">Log Out</a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
            <br>

            <?php include('dbconfig.php');?>

            <div class="col-div-4-1">
                <div class="box">
                    <p class="head-1">Total Service Providers</p>
                    <i class="fa fa-users box-icon"></i>
                    <?php 
                      $sp_query="SELECT * FROM service_provider";
                      $sp_query_run=mysqli_query($connection,$sp_query);
                      if($sp_total=mysqli_num_rows($sp_query_run))
                      {
                        echo '<h2 class="nb-0" style="margin-top:50px;margin-left:30px;color:grey;"> '.$sp_total.' </h2>';
                      }
                      else
                      {
                        echo '<h2 class="nb-0"> No Data </h2>';
                      }
                    ?>
                </div>
            </div>
            <div class="col-div-4-1">
                <div class="box">
                    <p class="head-1">Total Hire Persons</p>
                    <i class="fa fa-users box-icon"></i>
                    <?php 
                      $hp_query="SELECT * FROM hire_person";
                      $hp_query_run=mysqli_query($connection,$hp_query);
                      if($hp_total=mysqli_num_rows($hp_query_run))
                      {
                        echo '<h2 class="nb-0" style="margin-top:50px;margin-left:30px;color:grey;"> '.$hp_total.' </h2>';
                      }
                      else
                      {
                        echo '<h2 class="nb-0"> No Data </h2>';
                      }
                    ?>
                </div>
            </div>
            <div class="col-div-4-1">
                <div class="box">
                    <p class="head-1">Q&A Session</p>
                    <i class="fa fa-question box-icon"></i>
                    <p>Total Questions :</p>
                    <?php 
                      $qa_query="SELECT * FROM faq";
                      $qa_query_run=mysqli_query($connection,$qa_query);
                      if($qa_total=mysqli_num_rows($qa_query_run))
                      {
                        echo '<h2 class="nb-0" style="margin-top:50px;margin-left:30px;color:grey;"> '.$qa_total.' </h2>';
                      }
                      else
                      {
                        echo '<h2 class="nb-0"> No Data </h2>';
                      }
                    ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <br />

            <div class="col-div-4-1">
                <div class="box-1">
                    <div class="content-box-1">
                        <p class="head-1">Advertisements <span><a href="#">Handle</a></span></p>
                        <?php 
                      $ad_query="SELECT * FROM advertisement";
                      $ad_query_run=mysqli_query($connection,$ad_query);
                      if($ad_total=mysqli_num_rows($ad_query_run))
                      {
                        echo '<p> Total Advertiesments : </p>' ;
                        echo '<h2 class="nb-0" style="margin-top:10px;margin-left:30px;color:grey;"> '.$ad_total.' </h2>';
                      }
                      else
                      {
                        echo '<p class="nb-0"> No Data </p>';
                      }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-div-4-1">
                <div class="box-1">
                    <div class="content-box-1">
                        <p class="head-1">News <span><a href="/WADAK.com/App/view/News.php">Handle</a></span></p>
                        <?php 
                      $news_query="SELECT * FROM news";
                      $news_query_run=mysqli_query($connection,$news_query);
                      if($news_total=mysqli_num_rows($news_query_run))
                      {
                        echo '<p> Total News : </p>' ;
                        echo '<h2 class="nb-0" style="margin-top:10px;margin-left:30px;color:grey;"> '.$news_total.' </h2>';
                      }
                      else
                      {
                        echo '<p class="nb-0"> No Data </p>';
                      }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-div-4-1">
                <div class="box-1">
                    <div class="content-box-1">
                        <p class="head-1">Total Job Posts</p>
                        <i class="fa fa-clipboard box-icon" aria-hidden="true"></i>
                        <?php 
                      $post_query="SELECT * FROM postjob";
                      $post_query_run=mysqli_query($connection,$post_query);
                      if($post_total=mysqli_num_rows($post_query_run))
                      {
                        echo '<h2 class="nb-0" style="margin-top:50px;margin-left:30px;color:grey;"> '.$post_total.' </h2>';
                      }
                      else
                      {
                        echo '<h2 class="nb-0"> No Data </h2>';
                      }
                    ?>
                    </div>
                </div>
            </div>

            <?php 
               
               $post2_query="SELECT * FROM postjob";
               $post2_query_run=mysqli_query($connection,$post2_query);
            ?>

            <div class="table_div" style="background-color:white;margin-top:250px">
            <div class="recent-posts">
            <div class="title" style="">
                                               
              <h3> Recent Job Posts</h3> <div>

                <table width="100%" style="border: 1px solid #dddddd;text-align:left;">
                    <thead>
                        <tr style="color:Green;">
                            <!--<th>Job_ID</th>-->
                            <th>Job Title</th>
                            <th>Description</th>
                            <th>Budget</th>
                            <th>Job Type</th>
                            <!--<th>Hire Person Id</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                     if(mysqli_num_rows($post2_query_run)>0)
                     {
                         while($row=mysqli_fetch_assoc($post2_query_run))
                         {
                             ?>
                        <tr>
                            <!--<td> <?php# echo $row['jobid']; ?></td>-->
                            <td> <?php echo $row['title']; ?> </td> 
                            <td> <?php echo $row['description']; ?> </td>
                            <td> <?php echo $row['budget']; ?> </td>
                            <td> <?php echo $row['jobtype']; ?> </td>
                            <!--<td> <?php #echo $row['uid']; ?> </td>-->
                        </tr>
                        <?php
                            
                         }
                     }
                     else{
                         echo "No records Found";
                     }
                     ?>

                    </tbody>
                </table>
                    </div>
                <div>


                    <div class="clearfix"></div>
                </div>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                $(".menu").click(function() {
                    $("#mySidenav").css('width', '70px');
                    $("#main").css('margin-left', '70px');
                    $(".logo").css('display', 'none');
                    $(".logo1").css('display', 'block');
                    $(".logo span").css('visibility', 'visible');
                    $(".logo span").css('margin-left', '-10px');
                    $(".icon-a").css('visibility', 'hidden');
                    $(".icon-a").css('height', '25px');
                    $(".icons").css('visibility', 'visible');
                    $(".icons").css('margin-left', '-8px');
                    $(".menu1").css('display', 'block');
                    $(".menu").css('display', 'none');
                });

                $(".menu1").click(function() {
                    $("#mySidenav").css('width', '300px');
                    $("#main").css('margin-left', '300px');
                    $(".logo").css('visibility', 'visible');
                    $(".logo").css('display', 'block');
                    $(".icon-a").css('visibility', 'visible');
                    $(".icons").css('visibility', 'visible');
                    $(".menu").css('display', 'block');
                    $(".menu1").css('display', 'none');
                });
                </script>
                <script>
                $(document).ready(function() {
                    $(".profile p").click(function() {
                        $(".profile-div").toggle();

                    });
                    $(".noti-icon").click(function() {
                        $(".notification-div").toggle();
                    });
                });
                </script>


    </body>

</html>
