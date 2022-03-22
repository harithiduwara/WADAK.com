<!DOCTYPE html>
<html>
    <head>
        <link href="/WADAK.com/App/assets/css/chat2.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Chat</title>
    </head>
    <body>

        <!--navigation bar-->
        <nav>
            <label class="logo">WADAK</label>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="Add achievement post - Service provider.html">Post Job</a> </li>
                <li><a href="#">Jobs</a> </li>
                <li><a href="catagorymain.html">Services</a> </li>
                <li><a href="leaderboard.html">Leaderboard</a></li>
                <li><i class="far fa-bell"></i></li>
                <li><a href="#">Messages</a> </li>
                <li><a href="/WADAK.com/Implementation/controller/logout.php">Logout</a> </li>
                <div class="animation "></div>
            </ul>
        </nav>

<!--chat box-->
        <div class="main-section">
            <div class="head-section">
            <div class="headLeft-section">
            <div class="headLeft-sub">
            <input type="text" name="search" placeholder="Search...">
            <button> <i class="fa fa-search"></i> </button>
            </div>
        </div>
            <div class="headRight-section">
            <div class="headRight-sub">
                <div class="user-img"> <img src="/WADAK.com/App/assets/images/user3.png" style="width:30px; margin-top:10px;">            User Name   
            </div>
                
            </div>
            </div>
            </div>   
            <div class="body-section">
                <div class="left-section mCustomScrollbar" data-mcs-theme="minimal-dark">
                <ul>
                <li>
                <div class="chatList">
                <div class="img">
                <i class="fa fa-circle"></i>
                <img src="/WADAK.com/App/assets/images/user1.png">
                </div>
                <div class="desc">
                <small class="time">05:30 am</small>
                <h5>User1</h5>
                <small>Hey</small>
                </div>
                </div>
                </li> 

                <li>
                    <div class="chatList">
                    <div class="img">
                    <i class="fa fa-circle"></i>
                    <img src="/WADAK.com/App/assets/images/user2.png">
                    </div>
                    <div class="desc">
                    <small class="time">3 day</small>
                    <h5>User2</h5>
                    <small>Hey</small>
                    </div>
                    </div>
                 </li>

                 
                 <li>
                        <div class="chatList">
                        <div class="img">
                        <img src="/WADAK.com/App/assets/images/user4.png">
                        </div>
                        <div class="desc">
                        <small class="time">18 day</small>
                        <h5>User4</h5>
                        <small>Nice to meet you</small>
                        </div>
                        </div>
                </li>
                
                <li>
                    <div class="chatList">
                    <div class="img">
                    <i class="fa fa-circle"></i>
                    <img src="/WADAK.com/App/assets/images/programmer.png">
                    </div>
                    <div class="desc">
                    <small class="time">11:50 am</small>
                    <h5>User5</h5>
                    <small>Hey</small>
                    </div>
                    </div>
                </li>

            </ul>
        </div>
        <div class="right-section">
        <div class="message mCustomScrollbar" data-mcs-theme="minimal-dark">
            

            <ul>
                <li class="msg-left">
                <div class="msg-left-sub">
                <img src="/WADAK.com/App/assets/images/girl.png">
                <div class="msg-desc">
                 Hey
                <small>05:25 am</small>
                </div>
                </li>
                <li class="msg-right">
                <div class="msg-left-sub">
                <img src="/WADAK.com/App/assets/images/girl.png">
                <div class="msg-desc">
                Hey
                </div>
                <small>05:25 am</small>
                </div>
                </li>
                <li class="msg-day"><small>Wednesday</small></li>
                <li class="msg-left">
                <div class="msg-left-sub">
                <img src="/WADAK.com/App/assets/images/girl.png">
                <div class="msg-desc">
                Hey
                </div>
                <small>05:25 am</small>
                </div>
                </li>
                <li class="msg-right">
                <div class="msg-left-sub">
                <img src="/WADAK.com/App/assets/images/girl.png">
                <div class="msg-desc">
                Good morning
                </div>
                <small>05:25 am</small>
                </div>
                </li>
                <li class="msg-left">
                <div class="msg-left-sub">
                <img src="/WADAK.com/App/assets/images/girl.png">
                <div class="msg-desc">
                Good morning
                </div>
                <small>05:25 am</small>
                </div>
                </li>
                <li class="msg-right">
                <div class="msg-left-sub">
                <img src="/WADAK.com/App/assets/images/girl.png">
                <div class="msg-desc">
                Hey
                </div>
                <small>05:25 am</small>
                </div>
                </li>
                </ul>
                </div>

                <div class="right-section-bottom">
                <form>
                <div class="upload-btn">
                    <label for="file-input"> <i class="fa fa-photo"></i></label>
                    <input id="file-input" type="file"/>
                </div>
                
                <input type="text" name="" placeholder="Type message here..">
                <button class="btn-send">Send</button>
                </form>
                </div>
                </div>
                </div>
                </div>    

                
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                <!-- custom scrollbar plugin -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>      
    </body>
</html>