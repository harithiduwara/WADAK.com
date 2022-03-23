<!DOCTYPE html>
<html>

    <head>
        <title>
            Delete question2
        </title>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/delete question2.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="/WADAK.com/App/view/Add achievement post - Service provider.php">Post Job</a> </li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/App/view/chat.php">Messages</a> </li>
                <li><a href="/WADAK.com/App/controller/logout.php">Logout</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>

        <div class="box">
            <p class="heading">Delete Your Questions</p>
            <div class="qa">

                <details>
                    <summary id="demo">How register</summary>
                    <h4 class="text" id="demo">Register in here</h4>
                    <button class="button" onclick="myFunction()"> <i class="fa fa-trash-o"></i></button>
                </details>

                <details>
                    <summary id="demo">How to register as service provider</summary>
                    <h4 class="text" id="demo">Register in here</h4>
                    <button class="button" onclick="myFunction()"> <i class="fa fa-trash-o"></i></button>
                </details>

                <details>
                    <summary id="demo">How register as Hire person</summary>
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
