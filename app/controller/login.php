<?php
session_start();

/*if (isset($_SESSION['usuario'])) {
    header("location: ./index.php");
}*/
if($_POST){
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pass']) 
    && !empty($_POST['pass'])) {

        $email=$_POST['email'];
        $pass=$_POST['pass'];

        if (empty($_SESSION['registro'])) {
            echo json_encode([0, "No existen usuarios registrados"]);
        } else {
            if ($email == $_SESSION['registro']['email'] &&
             $pass == $_SESSION['registro']['pass']) {
                $_SESSION['usuario'] = $_SESSION['registro'];
                echo json_encode([1, "Datos de acceso correctos"]);
            } else {
                echo json_encode([0,"Contraseña o correo incorrectos"]);
            }
        } 
    } else {
        echo json_encode([0,"Campos vacios"]);
    }
}
?>