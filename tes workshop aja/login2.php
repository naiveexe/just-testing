<?php 
session_start();
include('db_koneksi.php'); // koneksi ke database

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username dan password cocok dengan data di tabel register
    $sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql); // Gantilah mysqli_query dengan $conn->query()

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama'] = $user['nama']; // Bisa ambil nama pengguna jika perlu
        header('Location: dashboard.php'); // Halaman setelah login sukses
    } else {
        echo "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title> 
    <link rel="stylesheet" href="loginn.css">
</head>
<body>
    <form method="POST">
        <h2>Login</h2>
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button><br><br>
        
        <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
    </form>
</body>
</html>
