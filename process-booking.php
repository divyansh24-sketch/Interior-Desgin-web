<?php
// process-booking.php
session_start();
require_once __DIR__ . '/config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $design_name = trim($_POST['design_name'] ?? '');
    $user_name   = trim($_POST['user_name'] ?? '');
    $user_email  = trim($_POST['user_email'] ?? '');
    $user_phone  = trim($_POST['user_phone'] ?? '');

    if (empty($user_name) || empty($user_email) || empty($user_phone) || empty($design_name)) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }

    try {
        // Step 1: Pehle check karo aur table apne aap bana lo agar nahi hai toh
        $pdo->exec("CREATE TABLE IF NOT EXISTS consultations (
            id INT AUTO_INCREMENT PRIMARY KEY,
            design_name VARCHAR(255) NOT NULL,
            user_name VARCHAR(255) NOT NULL,
            user_email VARCHAR(255) NOT NULL,
            user_phone VARCHAR(50) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");

        // Step 2: Ab data insert karo
        $sql = "INSERT INTO consultations (design_name, user_name, user_email, user_phone) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$design_name, $user_name, $user_email, $user_phone]);

        $_SESSION['user_name'] = $user_name;

        echo "<script>
            alert('Thank you, $user_name! Your consultation request has been successfully submitted.');
            window.location.href = 'views/about.php';
        </script>";
    } catch (\PDOException $e) {
        // Agar fir bhi koi error ho toh screen par exact error dikhaye
        echo "<script>alert('Database Error: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>