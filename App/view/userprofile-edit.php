<!Doctype HTML>
<html>

    <head>
        <title>User Profile</title>
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/userprofile-edit.css" type="text/css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul class="navbar">
                <?php
                        if(isset($_SESSION["user"]["userrole"])){?>
                <li><a href="/WADAK.com/App/view/postjob.php">Add Post</a></li>
                <?php
                    }
                    ?>
                <?php 
                    if($postType=="job"){?>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=service">Services</a></li>
                <?php }
                    else{ ?>
                <li><a href="/WADAK.com/App/view/jobs.php?postType=job">Jobs</a></li>
                <?php }
                    ?>


                <?php if(!isset($_SESSION["user"]["userrole"])){?>

                <li><a href="./login.php">Login</a></li>
                <?php }else {?>
                <li><i class="far fa-bell"></i></li>
                <li><a href="/WADAK.com/App/view/messages.php">Messages</a></li>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a></li>
                <?php } ?>


            </ul>
        </nav>





        <div class="container">
            <div class="wrapper">
                <div class="title"><span>Profile Settings</span></div>
                <form>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div id="profile-container">
                        <image id="profileImage" src="add user.png" class="center"
                            style="  width:100px ; height: 100px; align-items:center;">
                    </div>
                    <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>

                    <script>
                    $("#profileImage").click(function(e) {
                        $("#imageUpload").click();
                    });

                    function fasterPreview(uploader) {
                        if (uploader.files && uploader.files[0]) {
                            $('#profileImage').attr('src',
                                window.URL.createObjectURL(uploader.files[0]));
                        }
                    }

                    $("#imageUpload").change(function() {
                        fasterPreview(this);
                    });
                    </script>


                    <div class="row">
                        <span>Name </span><br><br>
                        <i class="fa fa-edit"></i>
                        <input type="text" value="Anne"><br><br>
                        <span>Email </span><br><br>
                        <i class="fa fa-edit"></i>
                        <input type="text" value="Anne@gmail.com"><br><br>
                        <span>Phone Number </span><br><br>
                        <i class="fa fa-edit"></i>
                        <input type="text" value="0714545466"><br><br>
                        <span>Subscription </span><br><br>
                        <i class="fa fa-edit"></i>
                        <input type="text" placeholder="add subscription"><br><br>


                        <!-- dropdown-->


                        <!--ratings-->
                        <span>Rating and Reviews</span><br><br>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>

                    <br>
                    <div class="row button1">
                        <input type="submit" value="Update">

                    </div>
                </form>

            </div>
        </div>

    </body>

</html>
