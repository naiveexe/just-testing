<?php
session_start(); 

if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'pengurus') {
    header("Location: login.php"); // Jika belum login atau bukan pengurus, redirect ke halaman login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tentang Saya - Universitas Pamulang</title>  
    <link rel="stylesheet" href="about.css">
    <link rel="icon" href="gambar/logo-unpam-300x291.png">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="index1.php">Home</a></li>
            <li><a href="CV.pdf">Download CV</a></li>
            <li><a href="kontak1.php">Contact</a></li>
            <li><a href="aboutme1.php">About Me</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <div class="profile-picture">
        <img src="gambar/1723567654048.jpg" alt="Foto Profil">
    </div>
    <div class="isi" style="max-width: 1000px; margin: 4em auto" >
        <h1>Tentang Saya</h1>
        <h2>Self Introduction</h2>
         Hello, saya Nazwa Azella, seorang mahasiswa Universitas Pamulang berusia 20 tahun yang berdomisili di Tangerang Selatan. 
         Saat ini, saya menempuh pendidikan di program studi Sistem Informasi dengan fokus pada struktur data. 
         Saya tertarik untuk mendalami teknik penyusunan data yang efisien serta algoritma yang mampu meningkatkan kinerja aplikasi. 
         Diharapkan, pemahaman ini dapat membantu saya dalam berbagai proyek dan penelitian serta membuka peluang karier di bidang teknologi 
         informasi yang membutuhkan keterampilan analisis data dan pemecahan masalah yang kuat.
        </p>
        <table border="3" width="100%">
            <tr>
            
                <th >Skill</th>
                <th>Pengalaman</th>
              
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>HTML (Expert)</li>
                        <li>CSS (Beginner)</li>
                        <li>Java script (Beginner)</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>Freelancer</li>
                        <li>IT Support</li>
                        <li>Cyber Security</li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>

    <hr>

    <footer class="footer">
        <p>Hak Cipta &copy; 2024 Universitas Pamulang</p>
    </footer>
</body>
</html>