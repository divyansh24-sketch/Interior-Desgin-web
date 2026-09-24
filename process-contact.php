<?php
// process-contact.php (Root folder mein rahegi)
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

    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($city) || empty($project_type)) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }

    try {
        $sql = "INSERT INTO contact_enquiries (first_name, last_name, email, phone, city, project_type, property_type, area, budget, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$first_name, $last_name, $email, $phone, $city, $project_type, $property_type, $area, $budget, $message]);

        echo "<script>
            alert('Thank you! Your project enquiry has been successfully received. Our design team will get in touch with you shortly.');
            window.location.href = 'views/contact.php';
        </script>";
    } catch (\PDOException $e) {
        echo "<script>alert('Error submitting enquiry. Please try again later.'); window.history.back();</script>";
    }
} else {
    header("Location: views/contact.php");
    exit;
}
?>