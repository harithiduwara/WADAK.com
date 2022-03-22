<!--php code-->
<?php
                  include 'newsconfig.php';
                  
                  $sql="SELECT * FROM service_provider WHERE 'SP_ID'= '$user_id'";
                  $result=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_assoc($result);
?>