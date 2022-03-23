<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/apply.css">
    </head>

    <body>

        <body>

            <nav>
                <label class="logo">WADAK</label>
                <ul>
                    <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                    <li><a href="/WADAK.com/App/view/Add achievement post - Service provider.php">Add Post</a> </li>
                    <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                    <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>
                    <li><a href="/WADAK.com/App/view/leaderboard.php">Leaderboard</a></li>
                    <li><i class="far fa-bell"></i></li>
                    <li><a href="/WADAK.com/App/view/chat.php">Messages</a> </li>
                    <li><a href="/WADAK.com/App/controller/logout.php">Logout</a> </li>
                    <div class="animation "></div>
                </ul>
            </nav>

            <div class="container">
                <div class="title">
                    <h4>Post Job</h4>
                </div><br>

                <form action="#">
                    <div class="job-details">

                        <div class="input-box">
                            <span class="details">Title</span>
                            <input type="text" placeholder="Job Title">
                        </div>

                        <div class="input-box">
                            <span class="details">Description</span>
                            <input type="text" placeholder="Your Desicription" id="des">
                        </div>

                        <div class="input-box">
                            <span class="details">Budget</span>
                            <input type="number" placeholder="$0.00">
                        </div>

                        <div class="input-box">
                            <span class="details">Tags</span>
                            <input type="text" placeholder="Tags that will bring you reach">
                        </div>

                    </div>


                    <br><br>

                    <div class="type-details">
                        <span class="type-title">Select Catagory</span>
                        <div class="category"><br>
                            <label for="">
                                <input type="radio" name="type" id="dot-1">
                                <span class="type">&nbsp; Web Developer</span>
                            </label>
                            <label for="">
                                <input type="radio" name="type" id="dot-2">
                                <span class="type"> &nbsp; Software Developer</span>
                            </label>
                            <label for="">
                                <input type="radio" name="type" id="dot-3">
                                <span class="type"> &nbsp; Graphic Designer</span>
                            </label>
                            <label for="">
                                <input type="radio" name="type" id="dot-4">
                                <span class="type"> &nbsp; Software Developer</span>
                            </label>
                        </div>
                    </div>

                    <div class="button" id="btn">
                        <input type="submit" value="Cancel" id="red">
                        <input type="submit" value="Post" id="green">
                    </div>

                </form>
            </div>
            </div>

        </body>

</html>


</body>






































<!-- <body>

        -----------------------------nav bar ------------------------------------- 

        <nav>
            <a href="home.html"><img class="wadaklogo" src="wadak.gif" alt="wadak gif"
                    style="float:left width:5% height:5%"></a>
            <ul style="margin-top: 1rem">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Post Job</a> </li>
                <li><a href="#">Jobs</a> </li>
                <li><a href="#">Services</a> </li>
                <li><a href="#">Messages</a> </li>
                <li><a href="#">Profile</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>

        <div class="container">
            <div class="applyform" id="applybox">
                <h1>Post Job</h1>
                <div id="form">
                    <form action="#">
                        <div class="inputbox">
                            <span class="jobtitle">Job</span>
                            <input type="text" placeholder="Your Job Title">
                        </div>

                        <div class="inputbox">
                            <span class="discription"> Description</span>
                            <input type="text" placeholder="Enter Your Job Details">
                        </div>

                        <div class="inputbox">
                            <span class="budget">Budget</span>
                            <input type="text" placeholder="$0.00">
                        </div>

                        <div class="tags">
                            <span class="tags">Tags</span>
                            <input type="text" placeholder="It will helps you to more reach.">
                        </div>

                        <form action="#">
                            <input list="jobcatagory" name="jobcatagory">
                            <datalist id="jobs">
                                <option value="Web Development">
                                <option value="Web Development">
                                <option value="Web Development">
                                <option value="Web Development">
                            </datalist>
                            <input type="submit" value="Submit" id="submitbutton">
                        </form>
                    </form>
                </div>
            </div>
        </div>




  --------------x--------------nav bar ----------------x----------------- 

        <script src="" async defer></script>
    </body> -->

</html>
