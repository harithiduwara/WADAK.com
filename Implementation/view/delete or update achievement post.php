<!Doctype HTML>
<html>
<head>
    <title>Delete/ update achievement post </title>
    <style>a {text-decoration: none;}</style>
    <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/delete or update achievement post.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <p class="logo">WADAK <span class="menu">&#9776;</span></p>
        <p class="logo1"> <span class="menu1">&#9776;</span></p>
        <a href="#"class="icon-a"> &nbsp;&nbsp;Home</a>
        <a href="#" class="icon-a"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="#"class="icon-a"> &nbsp;&nbsp;Service Provider</a>
        <a href="#"class="icon-a"> &nbsp;&nbsp;Post</a>
        <a href="#"class="icon-a"> &nbsp;&nbsp;Advertisements</a>
        <a href="#"class="icon-a"> &nbsp;&nbsp;Q&A Session</a>
        <a href="#"class="icon-a"> &nbsp;&nbsp;Chat</a>
        <a href="#"class="icon-a"> &nbsp;&nbsp;News</a>
        <a href="#"class="icon-a">&nbsp;&nbsp;Notification</a>
    </div>
    
  
    <nav>
        <label class="logo">WADAK</label>
        <ul>
            <li><a href="Add achievement post - Service provider.html">Post Job</a> </li>
            <li><a href="#">Jobs</a> </li>
            <li><a href="catagorymain.html">Services</a> </li>
            <li><a href="leaderboard.html">Leaderboard</a></li>
            <li><i class="far fa-bell"></i></li>
            <li><a href="#">Messages</a> </li>
            <li><a href="/WADAK.com/implementation/controller/logout.php">Logout</a> </li>
            <div class="animation "></div>
        </ul>
    </nav>

    <div class="container">
        <div class="wrapper">
          <div class="title"> Achievement Post</div>
          <form>
            <div class="row"> 
              <span> Title</span><br><br>
              <i class="fa fa-edit"></i>
              <input type="text" placeholder="Your job title" >
              <br><br><span> Description</span><br><br>
              <i class="fa fa-edit"></i>
              <input type="text" placeholder="Description" >
              <br><br><span> Category</span><br><br>
              <i class="fa fa-edit"></i>
              <input type="text" placeholder="Enter Category" >

             

            </div>
           <br><br><br><br><br><br><br><br><br>
           <h5 align= "center"> Upload new image if need (Max file size 5MB)</h5><br>
            <img src="upload.png" alt="file" width="70" height="70" class="center">
             <input type="file" id="image" name="image" class="file">
             <br><br><br>

            <button class="button button1">Update</button>
            <button class="button button2">Delete</button>

            
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
    