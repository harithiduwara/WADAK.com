<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Add achievement post</title>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/Add%20achievement%20post%20-%20Service%20provider.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/Add achievement post - Service provider.php">Post Job</a> </li>
                <li><a href="/WADAK.com/App/view/jobs.php">Jobs</a> </li>
                <li><a href="/WADAK.com/App/view/catagorymain.php">Services</a> </li>
                <li><a href="/WADAK.com/App/view/leaderboard.php">Leaderboard</a></li>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a> </li>
                <li><a href="/WADAK.com/App/controller/logout.php">Logout</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>

        <div class="container">
            <div class="title">
                <h2>Achievement Post</h2>
            </div><br>

            <form>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Title</span>
                        <input type="text" placeholder="Your job title">
                    </div>

                    <div class="input-box">
                        <span class="details">Description</span>
                        <input type="text" placeholder="Enter your job details">
                    </div>

                    <div class="input-box">
                        <span class="details">Category</span>
                        <input type="text" placeholder=" ">
                    </div>
                </div>
                <br><br>

                <div class="box">
                    <div class="wrapper">
                        <div class="image">
                            <div class="icon"><i class="fa fa-cloud-upload"></i> </div>
                            <div class="text">Add image if need</div>
                        </div>

                        <!-- <div id="cancel-btn"><i class="fa fa-close"></i></div> -->
                        <!--<div class="file-name">File name here</div>-->

                    </div>

                    <input id="default-btn" type="file">
                    <!-- <button onclick="defaultBtnActive()" id="custom-btn">Choose image </button> -->
                </div>
                <div class="buttonflex">
                    <div class="button">
                        <input type="submit" value="Cancel">
                        <input type="submit" value="Post">
                    </div>
                </div>

            </form>
        </div>
        </div>

        <script>
        const defaultBtn = document.querySelector("#default-btn");
        const defaultBtn = document.querySelector("#custom-btn");

        function defaultBtnActive() {
            defaultBtn.click();
        }
        </script>

    </body>

</html>
