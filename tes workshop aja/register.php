<?php
include('db_koneksi.php'); // koneksi ke database

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    // Insert data ke tabel register
    $sql = "INSERT INTO register (username, email, password, nama) VALUES ('$username', '$email', '$password', '$nama')";

    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Pendaftaran berhasil! Silakan login.'); window.location.href = 'login2.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
    <form method="POST">
        <h2 >Daftar Akun</h2>
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <button type="submit" name="register">Daftar</button>
        <p>Sudah punya akun? <a href="login2.php">Login disini</a></p>
    </form>
</body>
</html>
