<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: main.html');
    exit();
}
?>

<h2>Welcome to the Dashboard</h2>
<p>You are logged in as <?php echo $_SESSION['user_id']; ?>.</p>
<a href="logout.php">Logout</a>
