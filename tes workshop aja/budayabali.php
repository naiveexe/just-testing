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
        <img src="gambar/pantai.jpg" alt="Hero Image">
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
            <h2>Budaya & Adat Istiadat</h2>
            <p>Budaya dan adat istiadat Bali sangat kental dengan nilai-nilai agama Hindu dan tradisi lokal yang unik.
                Bali dikenal sebagai Pulau Seribu Pura, di mana ritual keagamaan dan adat menjadi bagian tak 
                terpisahkan dari kehidupan masyarakat. Upacara adat seperti Ngaben, Melasti, dan Galungan 
                mencerminkan keindahan spiritual yang mendalam. Sistem sosial 
                seperti banjar dan Subak menunjukkan bagaimana tradisi gotong royong dan kearifan lokal tetap 
                lestari di tengah modernisasi.
            </p>
        </div>

        <!-- Slider Section -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><a href="melasi.php"><img src="gambar/umelasi1.png" alt="Umelasi"></a></div>
                <div class="slide"><a href="ngaben.php"><img src="gambar/ngabenn.png" alt="Ngaben"></a></div>
                <div class="slide"><a href="saraswati.php"><img src="gambar/saraswati.png" alt="Saraswati"></a></div>
                <div class="slide"><a href="tumpak.php"><img src="gambar/tumpakbali.png" alt="Tumpak"></a></div>
                <div class="slide"><a href="galung.php"><img src="gambar/galung.png" alt="Tumpak"></a></div>
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
