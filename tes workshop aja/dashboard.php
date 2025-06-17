<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login2.php'); // Redirect ke halaman login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <div class="container">
        <h2>Welcome To The Tourism Bali <?php echo $_SESSION['username']; ?></h2>
        <a href="index1.php" class="logout-btn">Mulai</a>
    </div>
</body>
</html>
