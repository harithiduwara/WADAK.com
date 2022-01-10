<!Doctype HTML>
<html>

  <head>
    <title>Payment</title>
    <style>
      a {
        text-decoration: none;
      }

    </style>
    <link rel="stylesheet" href="/WADAK.com/App/assets/css//PaymentUI.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>


  <body>

    <div id="mySidenav" class="sidenav">
      <p class="logo">WADAK <span class="menu">&#9776;</span></p>
      <p class="logo1"> <span class="menu1">&#9776;</span></p>
      <a href="home.php" class="icon-a"><i class="fa fa-home icons"></i> &nbsp;&nbsp;Home</a>
      <a href="Admin-dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i>
        &nbsp;&nbsp;Dashboard</a>
      <a href="CategoryUI.php" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Categories</a>
      <a href="/WADAK.com/App/view/coadmin.php" class="icon-a"><i class="fa fa-users icons"></i>
        &nbsp;&nbsp;Co-Admin</a>
      <a href="ServiceProviderUI-admin.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Service
        Provider</a>
      <a href="ads.php" class="icon-a"><i class="fa fa-bullhorn icons"></i> &nbsp;&nbsp;Advertisements</a>
      <a href="View Report.php" class="icon-a"><i class="fa fa-envelope icons"></i> &nbsp;&nbsp;Reports</a>
      <a href="PaymentUI.php" class="icon-a"><i class="fa fa-money icons"></i> &nbsp;&nbsp;Payments</a>
      <a href="/WADAK.com/App/view/leaderboard.php" class="icon-a"><i class="fa fa-object-group icons"></i>
        &nbsp;&nbsp;Leaderboard</a>
      <!--<a href="#"class="icon-a"><i class="fa fa-bell icons"></i> &nbsp;&nbsp;Notification</a>-->
    </div>


    <div id="main">
      <div class="head">
        <div class="col-div-1">
          <p class="nav">Payments</p>

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
            <p>Admin Name <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
            <div class="profile-div">
              <p><i class="fa fa-user"></i> &nbsp;&nbsp; <a href="AdminProfile.html">Profile</a></p>
              <p><i class="fa fa-dashboard"></i> &nbsp;&nbsp; <a href="Admin-dashboard.html">Dashboard</a> </p>
              <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;<a
                  href="/WADAK.com/App/controller/logout.php">Log Out</a></p>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="clearfix"></div>
      <br />

      <div class="col-div-2">
        <div class="box">
          <p class="head-1">Payment - Details</p>
          <br />
          <table>
            <tr>
              <th>Payer Name</th>
              <th>Advertisement ID</th>
              <th>Date</th>
              <th>Amount</th>
            </tr>
            <tr>
              <td>S.K.Silva</td>
              <td>0001</td>
              <td>Oct 10, 2021</td>
              <td>Rs.1000.00</td>
            </tr>
            <tr>
              <td>A.G.Dew</td>
              <td>0002</td>
              <td>Oct 12, 2021</td>
              <td>Rs.1000.00</td>
            </tr>
            <tr>
              <td>S.S.Hima</td>
              <td>0003</td>
              <td>Oct 13, 2021</td>
              <td>Rs.1000.00</td>
            </tr>
            <tr>
              <td>S.K.Perera</td>
              <td>0004</td>
              <td>Oct 15, 2021</td>
              <td>Rs.1000.00</td>
            </tr>
          </table>
        </div>
      </div>
      </br>
      <div class="box2">
        <p class="head-1">Summary</p>
        <br />
        <table>
          <tr>
            <th>Month</th>
            <th>Total Advertisements</th>
            <th>Total Amount</th>
          </tr>
          <tr>
            <td>JANUARY</td>
          </tr>
          <tr>
            <td>FEBRUARY</td>
          </tr>
          <tr>
            <td>MARCH</td>
          </tr>
          <tr>
            <td>APRIL</td>
          </tr>
          <tr>
            <td>MAY</td>
          </tr>

        </table>
      </div>
      <div class="clearfix"></div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

      $(".menu").click(function () {
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

      $(".menu1").click(function () {
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
      $(document).ready(function () {
        $(".profile p").click(function () {
          $(".profile-div").toggle();

        });
        $(".noti-icon").click(function () {
          $(".notification-div").toggle();
        });
      });
    </script>
  </body>

</html>
