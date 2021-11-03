<!Doctype HTML>
<html>
<head>
    <title>Add question</title>
    <style>a {text-decoration: none;}</style>
    <link rel="stylesheet" href="./css/add question.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <nav>
        <label class="logo">WADAK</label>
        <ul>
          <li><a href="home.php" class="active">Home</a></li>
          <li><a href="job post.html">Post Job</a> </li>
          <li><a href="#">Jobs</a> </li>
          <li><a href="catagorymain.html">Services</a> </li>
          <!--<li><a href="#">Leaderboard</a></li>-->
          <!--<li><i class="far fa-bell"></i></li>-->
          <li><a href="chat.html">Messages</a> </li>
          <li><a href="/WADAK.com/implementation/controller/logout.php">Logout</a> </li>
            <div class="animation "></div>
        </ul>
    </nav>

<div id="mySidenav" class="sidenav">
    <p class="logo">WADAK <span class="menu">&#9776;</span></p>
    <p class="logo1"> <span class="menu1">&#9776;</span></p>
    <a href="home.php"class="icon-a"><i class="fa fa-home icons"></i> &nbsp;&nbsp;Home</a>
    <!--<a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>-->
    <!--<a href="#"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;All</a>-->
    <a href="Q&A.html"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Q&A</a>
</div>

<div class="container">
    <div class="wrapper">
      <div class="title"><span>Add Question</span></div>
      <form>
        <div class="row"> 
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Describe your question here.." >
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
