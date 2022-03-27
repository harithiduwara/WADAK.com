<!DOCTYPE html>
<html>

<head>
  <link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
  <title>forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
</head>

<body>

  <?php

  session_start();
  ?>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

    body {
      padding: 0%;
      margin: 0%;
      font-family: 'Open Sans', sans-serif;
      background-color: #efeff5;
    }

    .loginContainer {
      position: relative;
      width: 1520px;
      height: 800px;
      background: #EEEEEE;
      box-sizing: border-box;
    }

    nav {
      background: white;
      height: 80px;
      width: 100%;
    }

    label.logo {
      color: #599F68;
      font-size: 38px;
      line-height: 80px;
      padding: 0 100px;
      font-weight: bold;
    }

    nav ul {
      float: right;
      margin-right: 100px;
    }

    nav ul li {
      display: inline-block;
      line-height: 50px;
      margin: 0 5px;
    }

    nav ul li a {
      color: #599F68;
      font-size: 16px;
      padding: 7px 13px;
      border-radius: 3px;
      font-weight: bold;
      text-transform: uppercase;
      text-align: center;
    }

    nav ul li a.active,
    nav ul li a:hover {
      background: #599F68;
      color: white;
      transition: 0.5s;
    }

    nav ul li i:hover {
      background-color: #4EEC54;
      padding: 1rem 1rem;
      width: 3rem;
      transition: 0.5s;
    }

    nav ul li i {
      padding: 1rem 1rem;
      width: 3rem;
    }

    nav ul li a:hover {
      background-color: #4EEC54;
      color: white;
      transition: 0.5s;
    }

    .animation {
      position: absolute;
      height: 100%;
      top: 0;
      border-radius: 8px;
      transition: all .5s ease 0s;
    }

    .parent-container {
      display: flex;
    }

    .container1 {
      width: calc(75% - 160px);
      margin: 0 80px;
    }

    .ad-container {
      padding-top: 100px;
      width: 25%;
      margin-right: 80px;
    }

    .ad {
      width: calc(100% - 20px);
      height: 350px;
      margin: 50px 10px;
      overflow: hidden;
    }

    .ad img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }
  </style>
  <nav>
    <label class="logo">WADAK</label>
    <ul class="navbar">
      <?php
      if (isset($_SESSION["user"]["userrole"])) { ?>
        <li class="navbargreen"><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
      <?php
      }
      ?>
      <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
      <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>


      <?php if (!isset($_SESSION["user"]["userrole"])) { ?>

        <li><a href="./login.php">Login</a></li>
      <?php } else { ?>
        <li><i class="far fa-bell"></i></li>
        <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
        <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a>
        </li>
      <?php } ?>


    </ul>
  </nav>
  <!-- Modal -->
  <div id="ReplyModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reply Question</h4>
        </div>
        <div class="modal-body">
          <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
            <div class="form-group">
              <label for="usr">Write your name:</label>
              <input type="text" class="form-control" name="Rname" required>
            </div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
            <input type="button" id="btnreply" name="btnreply" class="btn btn-success" value="Reply">
          </form>
        </div>
      </div>

    </div>
  </div>

  <div class="parent-container">
    <div class="container1">

      <div class="panel panel-default" style="margin-top:50px">
        <div class="panel-body">
          <h3>Community forum</h3>
          <hr>
          <form name="frm" method="post">
            <input type="hidden" id="commentid" name="Pcommentid" value="0">
            <div class="form-group">
              <label for="usr">Write your name:</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
              <label for="comment">Write your question:</label>
              <textarea class="form-control" rows="5" name="msg" required></textarea>
            </div>
            <input type="button" id="butsave" name="save" class="btn btn-success" value="Send">
          </form>
        </div>
      </div>


      <div class="panel panel-default">
        <div class="panel-body">
          <h4>Recent questions</h4>
          <table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
            <tbody id="record">

            </tbody>
          </table>
        </div>
      </div>

    </div>

    <div class="ad-container">
      <div class="ad">
        <img src="IMG-20220327-WA0001.jpg">
      </div>
      <div class="ad">
        <img src="IMG-20220327-WA0002.jpg">
      </div>
      <div class="ad">
        <img src="IMG-20220327-WA0003.jpg">
      </div>
    </div>
  </div>
</body>

</html>