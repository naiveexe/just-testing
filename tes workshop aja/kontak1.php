
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="kontak11.css">
    <link rel="icon" href="gambar/logoPT.png">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-container">
            <img src="gambar/logoPT.png" alt="LogoPT" class="logo">
        </div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="kontak1.php">Contact Us</a></li>
        </ul>
        <!-- Logout Button -->
        <div class="logout-container">
            <a href="login2" class="logout">Logout</a>
        </div>
    </nav>
    
    <!-- Gambar di bawah navbar -->
    <div class="hero-image-container">
        <img src="gambar/barang2 safety.jpg" alt="Hero Image">
    </div>

    
    <div class="batas">
    <div class="batas-text">PT. UNIVERSAL TRADE INDOJAYA</div>
    </div>
</div>
<div class="date-time-container">
    <div class="date-display">Tanggal</div>
    <div class="time-display">Jam</div>
</div>


    <div class="contact-container">
        <div class="form-section">
            <h1>Contact Me</h1>
            <form>
                <label for="email">Email</label><br/>
                <input type="email" name="email" placeholder="alamat email" required />
                <br/>
                <label for="message">Pesan</label><br/>
                <textarea name="message" placeholder="Tulis pesan anda...." rows="4" cols="50" required></textarea>
                <br/>
                <input type="submit" value="Kirim"/>
            </form>
        </div>
        <div class="info-section">
            <h1>Info Kontak</h1>
            <div class="contact-info">
                <img src="gambar/warmv.png" alt="Phone Icon" class="contact-icon">
                <p><strong>Telepon:</strong> (+62) 851-7171-0612</p>
            </div>
            <div class="contact-info">
                <img src="gambar/emailrmv.png" alt="Email Icon" class="contact-icon">
                <p><strong>Email:</strong> gatansultan06@gmail.com</p>
            </div>
            <div class="contact-info">
                <img src="gambar/gmaprmv.png" alt="Address Icon" class="contact-icon">
                <p><strong>Alamat:</strong> Jl. Sunan Gunung Jati, RT003/RW008</p>
            </div>
        </div>
    </div>

    <footer style="text-align: center;">
        <P>Copyright &copy; PT. Universal Trade Indojaya.</P>
    </footer>
    <script src="script.js"></script>
</body>
</html>
