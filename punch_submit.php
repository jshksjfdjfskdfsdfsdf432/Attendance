<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pin = $_POST['pin'] ?? '';
    $action = $_POST['action_type'] ?? '';
    $photo = $_POST['photo'] ?? '';
    $latitude = $_POST['latitude'] ?? null;
    $longitude = $_POST['longitude'] ?? null;

    // Basic validation
    if (empty($pin) || !in_array($action, ['time_in', 'time_out'])) {
        header("Location: punch.php?msg=Invalid+input");
        exit;
    }

    try {
        // Prepare the SQL insert
        $stmt = $pdo->prepare("
            INSERT INTO attendance_logs 
            (employee_pin, action, photo_data, latitude, longitude) 
            VALUES (?, ?, ?, ?, ?)
        ");

        // Execute the insert
        $stmt->execute([$pin, $action, $photo, $latitude, $longitude]);

        // Redirect back to punch.php with success message
        header("Location: punch.php?msg=Successfully+recorded+$action");
        exit;
    } catch (PDOException $e) {
        // On DB error
        header("Location: punch.php?msg=Database+error");
        exit;
    }
} else {
    // If accessed directly without POST
    header("Location: punch.php");
    exit;
}
