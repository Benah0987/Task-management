<?php
session_start();

if (!isset($_SESSION['role']) || !isset($_SESSION['id'])) {
    $em = "Unknown error occurred";
    header("Location: login.php?error=" . urlencode($em));
    exit();
}

$user = $_SESSION['role'] ?? ''; // Use default value if session is not set
?>

<nav class="side-bar">
    <div class="user-p">
        <img src="img/user.jpg">
        <h4><?php echo ($user == "admin") ? "Admin" : "Employee"; ?></h4>
    </div>

    <ul class="navList">  <!-- Fixed incorrect syntax here -->
        <li>
            <a href="#">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php if ($user == "admin") { ?>
        <li>
            <a href="user.php">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>Manage Users</span>
            </a>
        </li>
        <li>
            <a href="create_task.php">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <span>Create Tasks</span>
            </a>
        </li>
        <li>
            <a href="tasks.php">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span>All Tasks</span>
            </a>
        </li>
        <li>
            <a href="note.php">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span>Notifications</span>
            </a>
        </li>
        <?php } else { // Employee menu ?>
        <li>
            <a href="#">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span>My Tasks</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Profile</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <span>Notifications</span>
            </a>
        </li>
        <?php } ?>

        <li>
            <a href="logout.php">
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</nav>
