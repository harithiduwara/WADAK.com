<?php
//require_once("dbconfig.php");
//if(isset($_GET['id'])){

   // $id = $_GET['id'];
   // $sql = "DELETE * FROM achievements WHERE A_ID = $id";
   // mysqli_query($connection,$sql);
   // header('location:/WADAK.com/Implementation/view/achievemts.php');
   // exit();
//}

?>

<?php
require_once("dbconfig.php");
if(isset($_POST['delete'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $sql = "DELETE FROM achievements WHERE A_ID=$id";
    mysqli_query($connection,$sql);
    //header("Implementation\view\addac.php?messege=1");
    header('location:/WADAK.com/Implementation/view/achievemts.php');
    exit();
}else{
    header('location:/WADAK.com/Implementation/view/home.php');
}
?>
