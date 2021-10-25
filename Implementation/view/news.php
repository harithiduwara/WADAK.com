<!Doctype HTML>
<html>
<head>
    <title>News</title>
    <style>a {text-decoration: none;}</style>
    <link rel="stylesheet" href="./css/news.css" type="text/css"/>
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
    
    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <p class="nav"> News</p>
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
                        <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="#">Profile</a></p>
                        <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a href="#">Dashboard</a> </p>
                        <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;Log Out</p>
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
          <div class="title"><span>Recent site announcements</span></div>

          <table>
          <tr>
          <th>News Id</th>
          <th>Date Published</th>
          <th>News</th>
          </tr>

          <!--php code-->
          <?
             include "newsconfig.php";
             $result = mysqli_query($conn,"SELECT News_ID,date,description  FROM news"); 
          ?>

         <?php
           if (mysqli_num_rows($result) > 0) {
         ?>
         <table>
  
          <tr>
           <td>News Id</td>
           <td>Date</td>
           <td>description</td>
          </tr>
         <?php
           $i=0;
           while($row = mysqli_fetch_array($result)) {
         ?>
        <tr>
         <td><?php echo $row["News_ID"]; ?></td>
         <td><?php echo $row["date"]; ?></td>
         <td><?php echo $row["description"]; ?></td>
       </tr>
        <?php
           $i++;
         }
         ?>
       </table>
 <?php
}
else{
    echo "No result found";
}
?>

           
            <form method="POST" action="">

            <a href="news.html"><input type="button" class="button" value="View news" name="view"></a>
            <a href="add news.html"><input type="button" class="button1" value="Add news" name="add"></a>
            <a href="delete news.html"><input type="button" class="button2" value="Update" name="delete"></a>
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
    