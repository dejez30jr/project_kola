<?php
require_once '../controllers/AdminController.php';

$controller = new AdminController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    default:
        $controller->index();
        break;
}
