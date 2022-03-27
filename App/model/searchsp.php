<!--php code-->
<?php
                  include 'newsconfig.php';
                  $sql="SELECT uid,username,name,birthday,address,email,contactno,userrole,profileDescription,telegram,twitter,instagram,profilePic FROM register WHERE username='".$_GET["username"] ."'";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_assoc($result);
?>