<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <style>
        a {
            text-decoration: none;
        }

        </style>
        <title>Post A Job</title>
        <link rel="stylesheet" href="/WADAK.com/App/assets/css/postjob.css">
    </head>

    <body>

        <nav>
            <label class="logo">WADAK</label>
            <ul style="margin-top: 1rem">
                <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
                <li><a href="/WADAK.com/App/view/jobs.php" target="_blank">Jobs</a> </li>
                <li><a href="/WADAK.com/App/view/services.php" target="_blank">Services</a> </li>
                <?php if(isset($_SESSION["user"]["userrole"])){?>
                <li><a href="/WADAK.com/App/view/messages.php" target="_blank">Messages</a> </li>
                <?php }?>
                <li><a href="/WADAK.com/App/view/userprofile.php" target="_blank">PROFILE</a> </li>
                <?php if(!isset($_SESSION["user"]["userrole"])){?>
                <li><a href="./login.php"></a></li>
                <?php }else {?>
                <li><a href="/WADAK.com/App/view/hirepersondashboard.php"><i class="fas fa-user"></i></a>
                </li>
                <?php } ?>
                <div class="animation "></div>
            </ul>
        </nav>
        <div class="postcontainer" style="height:120vmin">

            <div class="inputcontainer" id="loginbox"
                style="margin-left: 15vw; margin-top: 5% ;height:100vmin; display:grid; grid-template-columns: 1fr 1fr; grid-gap:1rem;">

                <diV>
                    <img src="/WADAK.com/App/uploads/noimage.jpg" alt="Job post Image" ;
                        style="width:100% ; height:65vmin">
                </diV>
                <diV>

                    <h1 style="font-size:3rem; color: green;
                                padding: 7px 13px;
                                border-radius: 3px;
                                font-weight: bold;
                                text-transform: uppercase;
                                text-align: center;">tag creates a holding space for the referenced image.</h1>

                    <p>
                        The HTML <img> tag is used to embed
                        an image in a web page.

                        Images are not technically inserted into a web page; images are linked to web pages. The
                        <img>
                        tag creates a holding space for the referenced image.

                        The <img> tag is empty, it contains attributes only, and does not have a closing tag.

                        The <img> tag has two required attributes:

                        src - Specifies the path to the image
                        alt - Specifies an alternate text for the image
                    </p>

                    <h1 style="font-size:50px">5000LKR</h1>
                    <p>1000 Views</p>
                    <span>
                        <button>
                            Hello
                        </button>
                        <button>
                            Hello
                        </button>
                        <button>
                            Hello
                        </button>
                    </span>
                </diV>
                <div style="padding:1rem; margin-top: -5rem">
                    <h1 style="font-size:3rem">Rank</h1>
                    <h1 style="font-size:2rem">5 Stars</h1>

                </div>
                <div>

                </div>
            </div>
        </div>
        </div>
    </body>

</html>
