<?php
session_start();

if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['id']) && isset($_POST['nombreP']) && isset($_POST['precio'])) {
    $nombreP = $_POST['nombreP'];
    $precio = $_POST['precio'];
    $id = uniqid(); 

    $_SESSION['productos'][] = [
        'id' => $id,
        'nombreP' => $nombreP,
        'precio' => $precio
    ];

    echo json_encode([1, 'Producto agregado exitosamente.']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['eliminar']) && isset($_POST['id'])) {
    $id = $_POST['id'];

    foreach ($_SESSION['productos'] as $index => $producto) {
        if ($producto['id'] === $id) {
            unset($_SESSION['productos'][$index]);
            $_SESSION['productos'] = array_values($_SESSION['productos']); 
            echo json_encode([1, 'Producto eliminado correctamente.']);
            exit;
        }
    }
    echo json_encode([0, 'Producto no encontrado.']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['actualizar']) && isset($_POST['id']) && isset($_POST['nombreP']) && isset($_POST['precio'])) {
    $id = $_POST['id'];
    $nombreP = $_POST['nombreP'];
    $precio = $_POST['precio'];

    foreach ($_SESSION['productos'] as $index => $producto) {
        if ($producto['id'] === $id) {
            $_SESSION['productos'][$index]['nombreP'] = $nombreP;
            $_SESSION['productos'][$index]['precio'] = $precio;
            echo json_encode([1, 'Producto actualizado correctamente.']);
            exit;
        }
    }
    echo json_encode([0, 'Producto no encontrado.']);
    exit;
}
