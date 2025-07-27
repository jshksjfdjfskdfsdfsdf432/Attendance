<?php
require_once __DIR__ . '/../../db.php';  // ✅ Go two levels up from /app/controllers

class HomeController {
    public function index() {
        $message = $_GET['msg'] ?? '';
        include __DIR__ . '/../views/home.php';
    }
}
