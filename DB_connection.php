<?php
$host = "localhost";  // XAMPP default host
$dbname = "task_management_db"; // Your database name
$username = "root";   // Default XAMPP username
$password = "";       // Default XAMPP password is empty

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
