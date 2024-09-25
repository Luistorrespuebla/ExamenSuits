<?php
require_once("./app/config/dependencias.php");
require_once("./app/controller/registro.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=CSS."registro_vista.css";?>">
    <title>Registro de Usuarios</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #f0f4f8;">
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%; border-radius: 20px;">
        <div class="card-body">
            <h1 class="text-center mb-4" style="font-size: 1.75rem; color: #333;">Alta Usuarios Telcel</h1>
            <div class="text-center mb-4">
                <i class="bi bi-person-fill-add" style="font-size: 3rem; color: #007bff;"></i>
            </div>
            <form action="./registro_vista.php" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" 
                        value="<?= (!empty($_POST['nombre'])) ? $_POST['nombre'] : ''; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido" 
                        value="<?= (!empty($_POST['apellido'])) ? $_POST['apellido'] : ''; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" 
                        value="<?= (!empty($_POST['email'])) ? $_POST['email'] : ''; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="bi bi-key-fill"></i></span>
                        <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" 
                        value="<?= (!empty($_POST['pass'])) ? $_POST['pass'] : ''; ?>" required>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="button" class="btn btn-primary btn-lg" id='btn-magico2'>Registrar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./public/js/main.js"></script>
</body>
</html>
