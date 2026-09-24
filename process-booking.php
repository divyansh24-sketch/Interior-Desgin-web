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
        $sql = "INSERT INTO consultations (design_name, user_name, user_email, user_phone) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$design_name, $user_name, $user_email, $user_phone]);

        // **Yahan user ka naam session mein save kar liya**
        $_SESSION['user_name'] = $user_name;

        echo "<script>
            alert('Thank you, $user_name! Your consultation request has been successfully submitted.');
            window.location.href = 'views/about.php';
        </script>";
    } catch (\PDOException $e) {
        echo "<script>alert('Error submitting request. Please try again.'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>