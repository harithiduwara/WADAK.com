<?php 

target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadok = 1;
$imageFileType = strtolower(pathunfo($target_file, PATHINFO_EXTENSION));
//Check if image file is a actual image or not 
if(isset($_POST["submit"])){
    
}
