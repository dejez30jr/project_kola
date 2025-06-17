<?php
require_once '../core/Controller.php';
require_once '../models/Artikel.php';

class AdminController extends Controller {
    public function index() {
        $artikel = new Artikel();
        $data = $artikel->getAll();
        $this->view('admin_list', ['artikel' => $data]);
    }

    public function create() {
        $this->view('admin_form');
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $slug = $_POST['slug'];
            $content = $_POST['content'];
            $tag_content = $_POST['tag_content'];
            $penulis = $_POST['penulis'];
            $created_at = date('Y-m-d H:i:s');

            $imageName = '';
            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $imageName = time() . '_' . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . $imageName);
            }

            $artikel = new Artikel();
            $artikel->insert([
                'title' => $title,
                'slug' => $slug,
                'content' => $content,
                'tag_content' => $tag_content,
                'penulis' => $penulis,
                'image' => $imageName,
                'created_at' => $created_at
            ]);

            header("Location: admin.php");
        }
    }
}

// require_once '../core/Controller.php';
// require_once '../models/Artikel.php';

// class AdminController extends Controller {
//     public function form() {
//         session_start();
//         if (!isset($_SESSION['admin_id']) || !isset($_SESSION['logged_in'])) {
//             header("Location: ../nuri_logmin.php");
//             exit();
//         }
//         $this->view('admin_form');
//     }

//     public function submit() {
//         session_start();
//         if (!isset($_SESSION['admin_id']) || !isset($_SESSION['logged_in'])) {
//             header("Location: ../nuri_logmin.php");
//             exit();
//         }

//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $artikel = new Artikel();
//             $result = $artikel->insertArtikel($_POST, $_FILES);
//             if ($result === true) {
//                 echo "<script>alert('Artikel berhasil diupload!'); window.location='admin';</script>";
//             } else {
//                 echo "<script>alert('$result'); window.location='admin';</script>";
//             }
//         }
//     }
// }

