<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="budd.css">
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
    
    <div class="batas"></div>

    <div class="date-time-container">
        <div class="date-display">Tanggal</div>
        <div class="time-display">Jam</div>
    </div>

 <!-- Konten Deskripsi dan Gambar dengan Slider -->
 <section class="content-section">
        <div class="description">
            <h2>Kesenian Bali</h2>
            <p>
            Kesenian di Bali merupakan perpaduan indah antara tradisi, spiritualitas, dan ekspresi budaya. Setiap 
            karya seni di Bali, mulai dari tarian hingga musik, memiliki makna yang mendalam, sering kali terkait 
            erat dengan upacara adat atau ritual keagamaan. Dalam seni tari, gerakan yang anggun dan ekspresif 
            menggambarkan cerita dari mitologi Hindu atau kehidupan masyarakat Bali. Musik tradisionalnya, yang 
            didominasi oleh gamelan, menciptakan suasana magis dengan ritme yang dinamis dan penuh energi
           
        </div>

        <!-- Slider Section -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><a href="gong.php"><img src="gambar/gong.png" alt="Umelasi"></a></div>
                <div class="slide"><a href="kecak.php"><img src="gambar/kecak.png" alt="Ngaben"></a></div>
                <div class="slide"><a href="ogoh.php"><img src="gambar/ogoh.png" alt="Saraswati"></a></div>
                <div class="slide"><a href="calonarang.php"><img src="gambar/calonarang.png" alt="Tumpak"></a></div>
                <div class="slide"><a href="panji.php"><img src="gambar/panji.png" alt="Tumpak"></a></div>
                <div class="slide"><a href="wali.php"><img src="gambar/wali.png" alt="Tumpak"></a></div>
            </div>
            <div class="navigation">
                <button class="nav-btn" id="prev">&#9664; </button> <!-- Panah Kiri -->
                <button class="nav-btn" id="next"> &#9654;</button> <!-- Panah Kanan -->
            </div>
            <div class="button-container">
                <a href="budaya.php" class="wisata-button">Back To Beranda</a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Nazwa Azella.</p>
    </div>

    <script src="script.js"></script>
    <script>
        const slides = document.querySelector('.slides');
        const slide = document.querySelectorAll('.slide');
        const prev = document.getElementById('prev');
        const next = document.getElementById('next');

        let index = 0;

        function showSlide(i) {
            index += i;
            if (index < 0) {
                index = slide.length - 1;
            } else if (index >= slide.length) {
                index = 0;
            }
            slides.style.transform = `translateX(${-index * 100}%)`;
        }

        prev.addEventListener('click', () => showSlide(-1));
        next.addEventListener('click', () => showSlide(1));
    </script>
</body>
</html>
