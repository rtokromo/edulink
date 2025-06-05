<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <h1>Welkom, <?php echo htmlspecialchars($_SESSION['user_naam']); ?></h1>
        <div class="menu">
            <a href="#">Kindgegevens</a>
            <a href="#">Rooster</a>
            <a href="#">Rapporten</a>
            <a href="logout.php">Uitloggen</a>
        </div>
    </div>
</body>
</html>
