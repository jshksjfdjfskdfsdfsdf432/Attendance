<?php
require_once __DIR__ . '/../models/ExampleModel.php';

class HomeController {
    public function index() {
        $model = new ExampleModel();
        $message = $model->getMessage();
        include __DIR__ . '/../views/home.php';
    }
}
