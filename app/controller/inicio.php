<?php

if (!isset($_SESSION['usuario'])) {
    header("location: ./login.php");
    exit;
}

if ($_POST) {
    if (isset($_POST['nombreP']) && !empty($_POST['nombreP']) && 
        isset($_POST['precio']) && !empty($_POST['precio'])) {

            if(is_numeric($_POST['nombreP'])) {
                echo "<script>alert('No puedes agregar números en un nombre');</script>";
            } else if(!is_numeric($_POST['precio'])) {
                echo "<script>alert('Los precios solo deben tener carácteres númericos');</script>";
            }

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
