<?php
// Definimos la ruta raíz del proyecto de forma absoluta
define('ROOT_PATH', __DIR__ . '/');

// Cargamos el controlador usando la constante
require_once ROOT_PATH . 'controllers/UserController.php';

$controller = new UserController();

// Obtener la acción desde la URL
$action = $_GET['action'] ?? 'index';

// Enrutamiento
if ($action === 'index') {
    $controller->index();
} elseif ($action === 'create') {
    $controller->create();
} elseif ($action === 'edit') {
    $controller->edit();
} elseif ($action === 'delete') {
    $controller->delete();
} else {
    echo "Página no encontrada";
}
?>