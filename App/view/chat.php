<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Chat Box</title>
      <link rel="stylesheet" href="/WADAK.com/Implementation/assets/css/chat.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>

      <nav>
         <label2 class="logo">WADAK</label2>
         <ul>
            <li><a href="/WADAK.com/App/view/home.php" class="active">Home</a></li>
            <li><a href="/WADAK.com/App/view/Add achievement post - Service provider.php">Post Job</a> </li>
            <li><a href="/WADAK.com/App/view/jobs.php">Jobs</a> </li>
            <li><a href="/WADAK.com/App/view/catagorymain.php">Services</a> </li>
            <li><a href="/WADAK.com/App/view/leaderboard.php">Leaderboard</a></li>
            <li><i class="far fa-bell"></i></li>
            <li><a href="/WADAK.com/App/view/chat.php">Messages</a> </li>
            <li><a href="/WADAK.com/App/controller/logout.php">Logout</a> </li>
   
           <!-- <li><a href="#">Login</a> </li> 
               No need a login right!-->
           <div class="animation "></div>
         </ul>
       </nav>

      <input type="checkbox" id="click">
      <label for="click">
      <i class="fab fa-facebook-messenger"></i>
      <i class="fas fa-times"></i>
      </label>
      <div class="wrapper">
         <div class="head-text">
            Customer Support - Online
         </div>
         <div class="chat-box">
            <div class="desc-text">
               Please fill out the form below.
            </div>
            <form action="#">
               <div class="field">
                  <input type="text" placeholder="Your Name" required>
               </div>
               <div class="field">
                  <input type="email" placeholder="Email Address" required>
               </div>
               <div class="field textarea">
                  <textarea cols="30" rows="10" placeholder="Type your message here.." required></textarea>
               </div>
               <div class="field">
                  <button type="submit">Start Chat</button>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>