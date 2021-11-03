<!Doctype HTML>
<html>
<head>
    <title>Delete/Update News</title>
    <style>a {text-decoration: none;}</style>
    <link rel="stylesheet" href="./css/delete news.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <p class="logo">WADAK <span class="menu">&#9776;</span></p>
        <p class="logo1"> <span class="menu1">&#9776;</span></p>
        <a href="home.php"class="icon-a"> &nbsp;&nbsp;Home</a>
        <a href="Co-admin dashboard.html" class="icon-a"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="ViewServiceProvider-coadmin.html"class="icon-a"> &nbsp;&nbsp;Service Provider</a>
        <a href="#"class="icon-a"> &nbsp;&nbsp;Post</a>
        <a href="#"class="icon-a"> &nbsp;&nbsp;Advertisements</a>
        <a href="Q&A.html"class="icon-a"> &nbsp;&nbsp;Q&A Session</a>
        <a href="#"class="icon-a"> &nbsp;&nbsp;Chat</a>
        <a href="news.php"class="icon-a"> &nbsp;&nbsp;News</a>
        <a href="#"class="icon-a">&nbsp;&nbsp;Notification</a>
    </div>
    
    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <p class="nav"> Update News</p>
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
                    <!--<img src="images/user.png" class="pro-img" /> -->
                    <p>Admin Name <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                    <div class="profile-div">
                        <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="CoAdmin-profile.html">Profile</a></p>
                        <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a href="Co-admin dashboard.html">Dashboard</a> </p>
                        <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;<a href="/WADAK.com/implementation/controller/logout.php">Log Out</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    
        <div class="clearfix"></div>
        <br/>
        <br/> 
    </div>
    

    <div class="container">
        <div class="wrapper">
          <div class="title"></div>
          <form>
            <div class="row"> 
                <span> News ID</span><br><br>
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Enter news ID" >
              <br><br><span> Date</span><br><br>
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Enter the date" >
              <br><br><span> Discription</span><br><br>
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Discription" >
            </div> <br><br><br><br><br><br><br><br>
            <button class="button button1">Update</button>
            <button class="button button2">Cancel</button>
          </form>
        </div>
      </div>
    

      
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    
        $(".menu").click(function(){
            $("#mySidenav").css('width','70px');
            $("#main").css('margin-left','70px');
            $(".logo").css('display', 'none');
            $(".logo1").css('display','block');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icon-a").css('height', '25px');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".menu1").css('display','block');
            $(".menu").css('display','none');
        });
    
        $(".menu1").click(function(){
            $("#mySidenav").css('width','300px');
            $("#main").css('margin-left','300px');
            $(".logo").css('visibility', 'visible');
            $(".logo").css('display','block');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".menu").css('display','block');
            $(".menu1").css('display','none');
        });
    
    </script>
    <script>
        $(document).ready(function(){
            $(".profile p").click(function(){
                $(".profile-div").toggle();
    
            });
            $(".noti-icon").click(function(){
                $(".notification-div").toggle();
            });
        });
    </script>
    </body>
    </html>
    