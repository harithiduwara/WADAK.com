<?php 

$target_dir = "/WADAK.com/App/uploads/";

$target_file = $target_dir .time().'-'.rand(0,1000). basename($_FILES["fileToUpload"]["name"]);
$uploadok = 1;
$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));

var_dump($_FILES);
//Check if image file is a actual image or not 
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check != false){
        echo "File is an image - " . $check["mime"]. ".";
        $uploadok = 1;
    }
    else{
        echo "File is not an image." ;
        $uploadok = 0;

    }
}

//check if file already exists
if (file_exists($target_file)){
    echo "Sorry, file already exists";
    $uploadok = 0 ;
}

//check file size
if($_FILES["fileToUpload"]["size"]>50000000)
{
    echo "Sorry, file size is too large!";
    $uploadok = 0;
}

//allow certain file formats\
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
    var_dump($imageFileType);
    echo "Sorry, we only allow jpg, png, jpeg.";
    $uploadok = 0;
}

// echo $target_file;

//if()
print(__DIR__.'/../../'.$target_file);
// if uploadok == 1 else a error
if($uploadok ==0){
    echo "Sorry, your file was not uploaded.";
}
else{
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], __DIR__.'/../../../'.$target_file)){
        
        echo "The file " .htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.";

        //spliting target_dir

       // $target_file = substr()
        
    }
    else{
        echo "Sorry, there was an error!";
        echo "<pre>";
        print_r($_FILES);
        
        print_r($target_dir);
    }
}
