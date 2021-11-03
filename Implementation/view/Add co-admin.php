<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <style>
            a {
                text-decoration: none;
            }

        </style>
        <title>Add CO-Admin</title>
        <link rel="stylesheet" href="./css/ADD co-admin.css">
    </head>

    <body>
        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="#">Jobs</a> </li>
                <li><a href="#">POST JOB</a> </li>
                <li><a href="#">Services</a> </li>
                <li><a href="#">MESSAGES</a> </li>
                <li><a href="/WADAK.com/implementation/controller/logout.php">Logout</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>
        <div class="loginContainer">

            <div class="inputContainer2">
                <h2>Add Co-Admin</h2>
            </div>

            <div class="inputContainer1">
                <img src="coadmin.png" width="150" height="200">
            </div>

            <div class="inputContainer">
                <div class="form">
                    <form>
                        <label for="fname" width="1400px">Name : </label>
                        <input type="text" name="name" id="fname" placeholder="Name"><br>
                        <label for="username">Username : </label>
                        <input type="text" name="username" id="lname" placeholder="Username"><br>
                        <label for="nic">NIC: </label>
                        <input type="text" id="nic" placeholder="NIC"><br>
                        <label for="mail">Email : </label>
                        <input type="email" id="mail" placeholder="Email"><br>
                        <label for="address">Address : </label>
                        <input type="text" id="address" placeholder="Address"><br>
                        <label for="hom">Contact Numbers </label><br>
                        <label for="home">Home : </label>
                        <input type="text" id="home" placeholder="Home"><br>
                        <label for="mobile">Mobile No: </label>
                        <input type="text" id="mobile" placeholder="Mobile">
                    </form>
                </div>

            </div>

            <div class="inputContainer3">
                <div class="form1">
                    <br><a href="#" class="button" type="submit">ok</a></br>
                    <a href="#" class="button" type="submit">cancle</a></br>
                </div>
            </div>

        </div>




</html>
