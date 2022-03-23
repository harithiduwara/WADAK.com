<?php
require 'newsconfig.php';
header('content-Type:application/json');
$json=[];
try{
    if(!isset($_POST['rating']) && empty($_POST['rating'])){
        throw new Exception("data not insert");
    }
    $query = $conn -> query("INSERT INTO star_rating VALUES('',".$_POST['rating'].")");
    if($query){
        $json=['success'=>TRUE,'message' =>'Insert data successfully'];
    }else{
        $json=['error'=>TRUE,'message' =>'data not insterted'];
    }
    }catch(Exception $e){
        $json=['error'=>TRUE,'message' => $e->getMessage()];
    }
    echo json_encode($json);

?>