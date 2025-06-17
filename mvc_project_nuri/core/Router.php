<?php
require_once '../controllers/HomeController.php';
require_once '../controllers/ArtikelController.php';
require_once '../controllers/AdminController.php';

$url = $_GET['url'] ?? 'home';
$url = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));

switch ($url[0]) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'artikel':
        $slug = $url[1] ?? '';
        $controller = new ArtikelController();
        $controller->show($slug);
        break;

    case 'admin':
        $controller = new AdminController();
        $controller->form();
        break;
    case 'submit':
        $controller = new AdminController();
        $controller->submit();
        break;
    default:
        echo "404 - Halaman tidak ditemukan";
    
}
