<!--php code-->
<?php
                  include 'newsconfig.php';
                  $sql="SELECT * FROM service_provider WHERE SP_ID='".$_GET["User ID"] ."'";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_assoc($result);
?>