<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("location: ./index.php");
}

if ($_POST) {
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pass']) 
    && !empty($_POST['pass'])) {

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if (empty($_SESSION['registro'])) {
            echo "<script>alert('No existen usuarios registrados');</script>";
        } else {
            if ($email == $_SESSION['registro']['email'] &&
             $pass == $_SESSION['registro']['pass']) {
                $_SESSION['usuario'] = $_SESSION['registro'];
                header("location: ./index.php");
            } else {
                echo "<script>alert('Contraseña o correo incorrectos');</script>";
            }
        }
    } else {
        echo "<script>alert('Existen campos vacios');</script>";
    }
}

?>