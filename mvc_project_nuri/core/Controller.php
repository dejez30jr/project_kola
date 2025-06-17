<?php
require_once '../config/config.php';

class Controller {
    // public function view($view, $data = []) {
    //     extract($data);
    //     require_once "../views/$view.php";
    // }
    public function view($view, $data = []) {
    $data['base_url'] = BASE_URL;
    extract($data);
    require_once "../views/$view.php";
}

}

