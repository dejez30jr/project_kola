<!-- 
// require_once '../core/Controller.php';
// require_once '../models/Artikel.php';

// class HomeController extends Controller {
//     public function index() {
//         $artikel = new Artikel();
//         $data = $artikel->getAll();
//         $this->view('home', ['artikel' => $data]);
//     }
// } -->

<?php
require_once '../core/Controller.php';
require_once '../models/Artikel.php';

class HomeController extends Controller {
// File: controllers/HomeController.php
public function index() {
    $artikel = new Artikel();
    
    $data = [
        'berita_terkini' => $artikel->getLimitedByTag('terkini', 2),
        'info_spmb' => $artikel->getLimitedByTag('info spmb', 1),
        'artikel_prestasi' => $artikel->getLimitedByTag('prestasi', 4)
    ];
    
    $this->view('home', $data);
}
}
