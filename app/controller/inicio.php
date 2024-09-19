<?php

if (!isset($_SESSION['usuario'])) {
    header("location: ./login.php");
    exit;
}

if ($_POST) {
    if (isset($_POST['nombreP']) && !empty($_POST['nombreP']) && 
        isset($_POST['precio']) && !empty($_POST['precio'])) {

        $nombreP = $_POST['nombreP'];
        $precio = $_POST['precio'];
    
        if (!isset($_SESSION['productos'])) {
            $_SESSION['productos'] = [];
        }
    
        $_SESSION['productos'][] = [
            "nombreP" => $nombreP,
            "precio" => $precio
        ];
    
        header('location: ./index.php');
        exit;
    } else {
        echo "<script>alert('Existen campos vacíos');</script>";
    }
}

?>
