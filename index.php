<?php
session_start();
require_once("./app/config/dependencias.php");
require_once("./app/controller/inicio.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=CSS."inicio.css";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <title>Login telcel</title>
</head>
<body class="vh-100">
    <div class="row">
        <div class="col"></div>
        <div class="col mt-5 p-5 c-datos">
            <h1 class="text-center text-black mb-5">Bienvenido a la tienda Telcel <i class="bi bi-emoji-sunglasses-fill"></i></h1>
            <h2 class="text-center text-black"><?= $_SESSION['registro']['nombre']." ".$_SESSION['registro']['apellido'];?> </h2>
            <p class="text-center text-black fs-4 mb-4"><?= $_SESSION['registro']['email'] ?></p> 
            <div class="d-flex justify-content-center">
                <a href="./cerrar_sesion.php" class="btn btn-danger">Cerrar sesion</a>
            </div>
        </div>
        <div class="col"></div>
    </div>
    
    <form action="./index.php" method="post">
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text bg-light border-0"><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control" placeholder="Nombre de producto" id="nombreP" name="nombreP" value="<?= (!empty($_POST['nombreP'])) ? $_POST['nombreP'] : ''; ?>" required>
            </div>
        </div>

        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text bg-light border-0"><i class="bi bi-currency-dollar"></i></span>
                <input type="text" class="form-control" placeholder="Precio" id="precio" name="precio" value="<?= (!empty($_POST['precio'])) ? $_POST['precio'] : ''; ?>" required>
            </div>
        </div>

        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Agregar Producto</button>
        </div>
    </form>

    <div class="container mt-5">
        <h2 class="text-center text-white">Lista de productos</h2>
        <ul class="list-group">
            <?php if (isset($_SESSION['productos']) && !empty($_SESSION['productos'])): ?>
                <?php foreach ($_SESSION['productos'] as $producto): ?>
                    <li class="list-group-item"><?= $producto['nombreP'] ?> - $<?= $producto['precio'] ?></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="list-group-item">No hay productos agregados.</li>
            <?php endif; ?>
        </ul>
    </div>
</body>
</html>

