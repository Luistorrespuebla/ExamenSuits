<?php
    session_start(); 
    session_unset(); 
    session_destroy(); 
    header("location: ./login.php");
    "<script>alert('Finalizaste tu sesión');</script>"
?>