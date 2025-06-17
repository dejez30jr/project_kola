<?php

require_once '../core/Database.php';

class Artikel extends Database {

    // Tampilkan semua artikel
    public function getAll() {
        $stmt = $this->dbh->query("SELECT id, title, slug, image, created_at FROM nuri_artikel ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Tampilkan detail artikel berdasarkan slug
    public function getBySlug($slug) {
        $stmt = $this->dbh->prepare("SELECT * FROM nuri_artikel WHERE slug = ?");
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Tambah artikel baru (dipakai di AdminController)
    public function insertArtikel($post, $files) {
        $tag = htmlspecialchars($post['tag_content']);
        $title = htmlspecialchars($post['title']);
        $penulis = htmlspecialchars($post['penulis']);
        $content = htmlspecialchars($post['content']);

        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));
        $check = $this->dbh->prepare("SELECT * FROM nuri_artikel WHERE slug = ?");
        $check->execute([$slug]);
        $count = 1;
        while ($check->rowCount() > 0) {
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-')) . '-' . $count;
            $check->execute([$slug]);
            $count++;
        }

        $imageName = basename($files['image']['name']);
        $tmpName = $files['image']['tmp_name'];
        $imagePath = 'img/' . $imageName;

        if (!move_uploaded_file($tmpName, "../" . $imagePath)) {
            return "Gagal upload gambar.";
        }

        $stmt = $this->dbh->prepare("INSERT INTO nuri_artikel 
            (title, slug, content, tag_content, penulis, image, created_at)
            VALUES (:title, :slug, :content, :tag, :penulis, :image, NOW())");

        return $stmt->execute([
            ':title' => $title,
            ':slug' => $slug,
            ':content' => $content,
            ':tag' => $tag,
            ':penulis' => $penulis,
            ':image' => $imagePath
        ]);
    }

    // Ambil artikel terbaru dengan tag 'terkini'
    public function getBeritaTerkini($limit = 2) {
        return $this->getLimitedByTag('terkini', $limit);
    }

    // Ambil artikel dengan tag 'info spmb'
    public function getInfoSPMB($limit = 1) {
        return $this->getLimitedByTag('info spmb', $limit);
    }

    // Ambil artikel dengan tag 'prestasi'
    public function getPrestasi($limit = 4) {
        return $this->getLimitedByTag('prestasi', $limit);
    }

    // Ambil artikel berdasarkan tag tertentu
    public function getByTag($tag) {
        $stmt = $this->dbh->prepare("SELECT * FROM nuri_artikel WHERE tag_content LIKE :tag ORDER BY created_at DESC");
        $stmt->execute([':tag' => "%$tag%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ambil artikel berdasarkan tag dengan limit
    public function getLimitedByTag($tag, $limit = 3) {
        $stmt = $this->dbh->prepare("SELECT * FROM nuri_artikel 
            WHERE tag_content LIKE :tag ORDER BY created_at DESC LIMIT :limit");
        $stmt->bindValue(':tag', "%$tag%", PDO::PARAM_STR);
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ambil artikel berdasarkan kategori (jika nanti ada kolom `category`)
    public function getByCategory($category) {
        $stmt = $this->dbh->prepare("SELECT * FROM nuri_artikel 
            WHERE category = :category ORDER BY created_at DESC");
        $stmt->execute([':category' => $category]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ambil artikel berdasarkan kategori dengan limit
    public function getLimitedByCategory($category, $limit = 3) {
        $stmt = $this->dbh->prepare("SELECT * FROM nuri_artikel 
            WHERE category = :category ORDER BY created_at DESC LIMIT :limit");
        $stmt->bindValue(':category', $category, PDO::PARAM_STR);
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

