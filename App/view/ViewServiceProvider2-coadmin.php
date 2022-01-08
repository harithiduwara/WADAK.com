<!Doctype HTML>
<html>
<head>
  <title>Service Provider</title>
  <style>a {text-decoration: none;}</style>
  <link rel="stylesheet" href="/WADAK.com/App/assets/css/ViewServiceProvider2-coadmin.css" type="text/css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<div id="mySidenav" class="sidenav">
  <p class="logo">WADAK <span class="menu">&#9776;</span></p>
  <p class="logo1"> <span class="menu1">&#9776;</span></p>
  <a href="home.php"class="icon-a"><i class="fa fa-home icons"></i> &nbsp;&nbsp;Home</a>
  <a href="Co-admin dashboard.html" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="ServiceProviderUI-coadmin.html"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Service Providers</a>
  <a href="categorymain.html"class="icon-a"><i class="fa fa-bullseye icons"></i> &nbsp;&nbsp;Posts</a>
 
  <a href="Q&A.html"class="icon-a"><i class="fa fa-question-circle icons"></i> &nbsp;&nbsp;Q & A Session</a>
  <a href="chat.html"class="icon-a"><i class="fa fa-comment icons"></i> &nbsp;&nbsp;Chat</a>
  <a href="news.php"class="icon-a"><i class="fa fa-newspaper-o icons"></i> &nbsp;&nbsp;News</a>
  <!--<a href="#"class="icon-a"><i class="fa fa-bell icons"></i> &nbsp;&nbsp;Notification</a>-->
</div>

<div id="main">
  <div class="head">
    <div class="col-div-1">
      <p class="nav">Service Provider Name</p>

    </div>

    <div class="col-div-1">
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
          <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="/WADAK.com/App/view/CoAdmin-profile.php">Profile</a></p>
          <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a href="/WADAK.com/App/view/Co-admin dashboard.php">Dashboard</a> </p>
          <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;<a href="/WADAK.com/implementation/controller/logout.php">Log Out</a></p>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="clearfix"></div>
  <br/>


  <div class="search-form">
  <form action="" method="POST">
    <input type ="text" name ="SP_ID" placeholder="Enter Id">
    <input type ="submit" name ="search" placeholder="Search">
   </form>
  </div>

<?php 
$conn= mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'wadak');
if(isset($_POST['search']))
{
    $SP_ID= $_POST['SP_ID'];
    $query="SELECT SP_ID,Fname,Lname,Gender,Email,address,contact,DOB,description FROM service_provider WHERE SP_ID = '$SP_ID'";
    $query_run=mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run))
    {
        ?>
  <div class="col-div-2">
    <div class="box">

      <form>
      
        <table>
          <tr>
            <td>
              First Name :
            </td>
            <td>
              <?php echo $row['Fname']; ?>
            </td>
          </tr>
          <tr>
            <td>
              Last Name :
            </td>
            <td>
             <?php echo $row['Lname']; ?>
            </td>
          </tr>
          <tr>
            <td>
              Service Provider ID :
            </td>
            <td>
              <?php echo $row['SP_ID']; ?>
            </td>
          </tr>
          <tr>
            <td>
              Contact :
            </td>
            <td>
               <?php echo $row['contact']; ?>
            </td>
          </tr>
          <tr>
            <td>
              Email :
            </td>
            <td>
              <?php echo $row['Email']; ?>
            </td>
          </tr>
          <tr>
            <td>
              Address:
            </td>
            <td>
              <?php echo $row['address']; ?> 
            </td>
          </tr>
          <tr>
            <td>
              Gender:
            </td>
            <td>
              <?php echo $row['Gender']; ?>
            </td>
          </tr>
          <tr>
            <td>
              Date of Birth :
            </td>
            <td>
              <?php echo $row['DOB']; ?>
            </td>
          </tr>
          <tr>
            <td>
              Description :
            </td>
            <td>
              <?php echo $row['description']; ?>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <div class="col-div-2">
    <div class="imgbox">
      <div class="img">
        <img src="/WADAK.com/App/assets/images/sp.png" width="325" height="380">
      </div>

    </div>
    <div class="box1">
      <a href="#" onclick="myfunction1()">Delete</a>
    </div>
    <div class="box2">
      <a href="#">Cancel</a>
    </div>
  </div>
  <div class="clearfix"></div>
</div>

<?php
    }
}
?>

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
<script>
  function myfunction1() {
    var txt;
    if (confirm("Are you sure?")) {
      txt ="Successfully deleted!";
    } else {
      txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
  }
</script>
</body>
</html>
