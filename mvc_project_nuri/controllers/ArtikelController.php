<?php
require_once '../core/Controller.php';
require_once '../models/Artikel.php';

class ArtikelController extends Controller {
    public function show($slug) {
        $artikel = new Artikel();
        $slug = trim($slug);

        $data = $artikel->getBySlug($slug);

        if (!$data) {
            echo "404 - Artikel tidak ditemukan";
            return;
        }

        $related = $artikel->getLimitedByTag($data['tag_content'], 4);

        $this->view('artikel_detail', [
            'data' => $data,
            'related' => $related
        ]);
    }
}
