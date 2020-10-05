<?php 

    unset($_SESSION['authorized']);
    unset($_SESSION['Mail']);
    unset($_SESSION['UserName']);
    session_destroy();
    header("Location:http://localhost/Mylittlepony/"); 
    exit;
?>