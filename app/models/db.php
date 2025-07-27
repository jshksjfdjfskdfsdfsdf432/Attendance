<?php
$host = 'sql311.infinityfree.com'; // or check your control panel
$db   = 'if0_39554433_time_app';
$user = 'if0_39554433';            // check if this is your correct user
$pass = 'Myjun12345';    // from your InfinityFree account

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}
?>
