<?php
$host = 'sql213.infinityfree.com';   // Replace with actual host (e.g. sql311.infinityfree.com)
$user = 'if0_39554433';              // Your InfinityFree username
$pass = 'Myjun12345';   // Your password
$db   = 'if0_39554433_time_app';     // Your DB name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// echo "✅ Connected!";
?>
