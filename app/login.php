<?php
session_start();
require '../DB_connection.php'; // Ensure database connection

if(isset($_POST['user_name']) && isset($_POST['password'])) {

    function validate_input($data){
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $username = validate_input($_POST['user_name']);
    $password = validate_input($_POST['password']);

    if(empty($username) || empty($password)){
        header("Location: ../index.php?error=Username and Password are required");
        exit();
    }

    // Check if user exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'full_name' => $user['full_name'],
            'username' => $user['username'],
            'role' => $user['role']
        ];

        // Redirect based on role
        if ($user['role'] === 'admin') {
            header("Location: ../admin_dashboard.php?success=Welcome Admin!");
        } elseif ($user['role'] === 'employee') {
            header("Location: ../employee_dashboard.php?success=Welcome Employee!");
        } else {
            header("Location: ../index.php?error=Unauthorized role detected");
        }
        exit();
    } else {
        header("Location: ../index.php?error=Invalid username or password");
        exit();
    }
} else {
    header("Location: ../index.php?error=Unknown error occurred");
    exit();
}
?>
