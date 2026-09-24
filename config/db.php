<?php
// Aiven Cloud MySQL Database Connection Settings
$host = 'mysql-2d5e85eb-divyanshjangra24-e886.k.aivencloud.com';
$port = '20180';
$dbname = 'defaultdb';
$username = 'avnadmin';
$password = getenv('DB_PASSWORD');

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database Connection Failed: " . $e->getMessage();
    exit();
}
?>