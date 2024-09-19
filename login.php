<?php 
require_once "./app/config/dependencias.php";
require_once "./app/controller/login.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=JS."bootstrap.bundle.min.js";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <link rel="stylesheet" href="<?=CSS."main.css";?>">
    <title>Iniciar Sesión</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" >
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%; border-radius: 20px;">
        <div class="card-body">
            <h1 class="text-center mb-4" style="font-size: 1.75rem; color: #333;">Iniciar Sesión</h1>

            <div class="text-center mb-4">
                <i class="bi bi-person-circle" style="font-size: 3rem; color: #007bff;"></i>
            </div>

            <form action="./login.php" method="post">

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="bi bi-person-fill"></i></span>
                        <input type="email" class="form-control" placeholder="Ingrese su email" id="email" name="email" value="<?= (!empty($_POST['email'])) ? $_POST['email'] : ''; ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="pass" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="pass" name="pass" value="<?= (!empty($_POST['pass'])) ? $_POST['pass'] : ''; ?>" required>
                    </div>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <a href="./registro_vista.php" class="text-primary">Registrate aquí</a>
            </div>
        </div>
    </div>
</body>
</html>
