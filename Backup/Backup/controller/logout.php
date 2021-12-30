<?php
    session_start();
    
    unset($_SESSION["username"]);

    session_destroy();
    
    header("Location:/WADAK.com/Implementation/view/home.php");
?>
