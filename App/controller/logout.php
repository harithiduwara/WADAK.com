<?php
    session_start();
    
    unset($_SESSION["username"]);

    session_destroy();
    
    header("Location:/WADAK.com/App/view/home.php");
?>
