<!--php code-->
<?php
                  include 'newsconfig.php';
                  $sql="SELECT * FROM service_provider";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_assoc($result);
?>