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
            <h2>Alat Musik Bali</h2>
            <p>
            Alat musik Bali mencakup berbagai instrumen yang digunakan dalam upacara dan pertunjukan. 
            Gamelan Bali terdiri dari gong, kendang, dan metallophone yang menciptakan suara ritmis dan dinamis.  Alat 
            musik di Bali sanagat sering sekali di gunakan karena di bali terkenal dengan budaya adat istiadat yang di iringin 
            oleh alat musikk.
           
        </div>

        <!-- Slider Section -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><a href="rindik.php"><img src="gambar/rindik.png" alt="Umelasi"></a></div>
                <div class="slide"><a href="ceng.php"><img src="gambar/Ceng Ceng.png" alt="Ngaben"></a></div>
                <div class="slide"><a href="gender.php"><img src="gambar/gender.png" alt="Saraswati"></a></div>
                <div class="slide"><a href="gangsa.php"><img src="gambar/gangsa.png" alt="Tumpak"></a></div>
                <div class="slide"><a href="gamelang.php"><img src="gambar/gamelang.png" alt="Tumpak"></a></div>
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
