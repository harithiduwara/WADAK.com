<!DOCTYPE html>
<html>
    <head>
        <title>
            Delete answer2
        </title>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/delete answer2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="Add achievement post - Service provider.html">Post Job</a> </li>
                <li><a href="#">Jobs</a> </li>
                <li><a href="catagorymain.html">Services</a> </li>
                
                <li><i class="far fa-bell"></i></li>
                <li><a href="#">Messages</a> </li>
                <li><a href="/WADAK.com/implementation/controller/logout.php">Logout</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>

        <div class="box">
        <p class="heading">Delete Your Answers</p>
        <div class="qa">

           <details>
               <summary>How register</summary>
               <h4 class="text" id="demo">Register in here</h4>
               <button class="button" onclick="myFunction()"> <i class="fa fa-trash-o"></i></button>
           </details>

           <details>
            <summary>How to register as service provider</summary>
            <h4 class="text" id="demo">Register in here</h4>
            <button class="button" onclick="myFunction()"> <i class="fa fa-trash-o"></i></button>
           </details>

           <details>
            <summary>How register as Hire person</summary>
            <h4 class="text" id="demo">Register in here</h4>
            <button class="button" onclick="myFunction()"> <i class="fa fa-trash-o"></i></button>
           </details>

        </div>
        </div>

        <script>
            function myFunction() {
            var myobj = document.getElementById("demo");
            myobj.remove();
}
        </script>
    </body>
</html>