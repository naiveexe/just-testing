<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="culture.css">
    <link rel="icon" href="gambar/logo-unpam-300x291.png">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-container">
            <img src="gambar/logo-unpam-300x291.png" alt="Logo Universitas Pamulang" class="logo">
        </div>
        <ul>
            <li><a href="index1.php">Home</a></li>
            <li><a href="destinasi.php">Destinations</a></li>
            <li><a href="culinery.php">Culinary</a></li>
            <li><a href="Budaya.php">Culture</a></li>
            <li><a href="kontak1.php">Contact Us</a></li>
        </ul>
        <!-- Logout Button -->
        <div class="logout-container">
            <a href="login2.php" class="logout">Logout</a>
        </div>
    </nav>
    
    <!-- Gambar di bawah navbar -->
    <div class="hero-image-container">
        <img src="gambar/latar2.jpg" alt="Hero Image">
        <div class="hero-text">Welcome To Bali</div>
    </div>
    
    <div class="batas">
    </div>

    <div class="date-time-container">
        <div class="date-display">Tanggal</div>
        <div class="time-display">Jam</div>
    </div>

    <main>
        <section class="tempat-hits">
                <div class="tempat-hits-item">
                    <h3>Budaya & Adat Istiadat Bali</h3>
                    <img src="gambar/kebudayaan.jpg" alt="Tempat Hits 1">
                    <a href="budayabali.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Alat Musik</h3>
                    <img src="gambar/musik.jpg" alt="Tempat Hits 1">
                    <a href="alat.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Kesenian Bali</h3>
                    <img src="gambar/tari.jpg" alt="Tempat Hits 1">
                    <a href="seni.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
        </section>  
    </main>

    <!-- Footer -->
    <div class ="foter" >
    <p>&copy; 2024 Nazwa Azella.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
