<?php
// process-contact.php
session_start();
require_once __DIR__ . '/config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name    = trim($_POST['first_name'] ?? '');
    $last_name     = trim($_POST['last_name'] ?? '');
    $email         = trim($_POST['email'] ?? '');
    $phone         = trim($_POST['phone'] ?? '');
    $city          = trim($_POST['city'] ?? '');
    $project_type  = trim($_POST['project_type'] ?? '');
    $property_type = trim($_POST['property_type'] ?? '');
    $area          = trim($_POST['area'] ?? '');
    $budget        = trim($_POST['budget'] ?? '');
    $message       = trim($_POST['message'] ?? '');

    // Required fields check
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($city) || empty($project_type)) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }

    try {
        // Step 1: Automatic table creation with all required columns if not exists
        $pdo->exec("CREATE TABLE IF NOT EXISTS contacts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(100) NOT NULL,
            last_name VARCHAR(100) NOT NULL,
            email VARCHAR(255) NOT NULL,
            phone VARCHAR(50) NOT NULL,
            city VARCHAR(100) NOT NULL,
            project_type VARCHAR(100) NOT NULL,
            property_type VARCHAR(100) DEFAULT NULL,
            area VARCHAR(100) DEFAULT NULL,
            budget VARCHAR(100) DEFAULT NULL,
            message TEXT DEFAULT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");

        // Step 2: Insert form data into database
        $sql = "INSERT INTO contacts (first_name, last_name, email, phone, city, project_type, property_type, area, budget, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$first_name, $last_name, $email, $phone, $city, $project_type, $property_type, $area, $budget, $message]);

        echo "<script>
            alert('Thank you, $first_name! Your project enquiry has been successfully submitted. We will contact you soon.');
            window.location.href = 'views/contact.php';
        </script>";
    } catch (\PDOException $e) {
        echo "<script>alert('Database Error: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>