<?php
session_start();
if (!isset($_SESSION['role']) || !isset($_SESSION['id'])) {
    $em = "Unknown error occurred";
    header("Location: login.php?error=" . urlencode($em));
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <input type="checkbox" id="checkbox">
    
    <?php include 'header.php'; ?>
    
    <div class="body">
        <?php include 'nav.php'; ?>
        
        <section class="section-1">
            <h1>WELCOME</h1>
            <p>#CodingWithElias</p>
        </section>
    </div>
</body>
</html>
