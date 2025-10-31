<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Judul Halaman</title>
   <link rel="stylesheet" href="style.css">
</head>

   <body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat datang</h2>
            <p>Ini contoh paragraf HTML.</p>
            <?php
    echo "Hallo Dunia!<br>";
    echo "Nama saya Julio Putrawan";
     ?>
        </section>
        <section id="about">
            <?php
            $nim = "2511500076";
            $nama = "Julio Putrawan";
            $tempatlahir = "Pangkalpinang";
            $tanggallahir = "01 Juli 2006";
            $hobi = "Bermain game";
            $pasangan = "Belum ada";
            $pekerjaan = "Teknisi";
            $namaorangtua = "Ibu Yuliana";
            $namakakak = "Tama Tamara";
            $namaadik = "Barlian Tirta";







            echo "Nim: $nim <br>";
            echo "Nama: $nama <br>";
            ?>
            <h2>Tentang Saya</h2>
            

        </section>
        <section id="contact">
            <h2>Kontak kami</h2>
            <form action="" method= "GET">
                <label for="txtNama">
                    <span>Nama:</span>
                <input type="text" id="txtNama" name="txtNama" placeholder="Masukan Nama" required autocomplete="name">
            </label>

                <label for="txtEmail"><span>Email:</span>
                <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukan Email" required autocomplete="email">
            </label>

                <label for="txtPesan"><span>Pesan Anda:</span>
                <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis Pesan Anda..." required></textarea>
            </label>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
          
            </form>

        </section>
    </main>
    <footer>
        <p>&copy; 2025 Julio Putrawan [2511500076]</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
