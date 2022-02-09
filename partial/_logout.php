<?php

    session_start();
    // echo "Logging you out. Please wait...";
    session_destroy();
    header("location: http://localhost/iForum-iDiscuss/index.php");
    exit();
    
?>