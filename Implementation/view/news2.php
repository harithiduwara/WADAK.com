<!Doctype HTML>
<html>
<head>
    <title>News</title>
    <style>a {text-decoration: none;}</style>
    <link rel="stylesheet" href="./css/news2.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<nav>
      <label class="logo">WADAK</label>
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="Add achievement post - Service provider.html">Post Job</a> </li>
        <li><a href="#">Jobs</a> </li>
        <li><a href="catagorymain.html">Services</a> </li>
       <!-- <li><a href="#">Leaderboard</a></li>-->
        <!--<li><i class="far fa-bell"></i></li>-->
        <li><a href="#">Messages</a> </li>
        <li><a href="#">Logout</a> </li>

        <!-- <li><a href="#">Login</a> </li> 
            No need a login right!-->
        <div class="animation "></div>
      </ul>
    </nav>

<!-- news containers -->

          <h1 style="margin-top:12px; margin-left:100px; color:#6c7293;"> News</h1>
            <table>
                  <!--php code-->
          <?php
                require_once("newsconfig.php");
                $sql ="SELECT date,description FROM news";
                $result = mysqli_query($conn,$sql);
                $out = "";
                while($data=$result->fetch_assoc()){
                    $out .=  "<tr> <td> <img src='online.png' class='image' style='width:50px;height:50px;''" .  "</td><td>"   .$data['date'].   "</td><td>"  .$data['description']. "</td></tr>";
                }
                echo $out;
          ?>
</body>
</html>