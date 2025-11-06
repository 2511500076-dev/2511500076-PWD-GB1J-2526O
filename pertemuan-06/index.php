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
            $pasangan = "belum ada";
            $pekerjaan = "Teknisi";
            $namaorangtua = "Ibu Yuliana";
            $namakakak = "Tama Tamara";
            $namaadik = "Barlian Tirta";
            ?>
            <h2>Tentang Saya</h2>
            <p>
                <strong>NIM:</strong>
                <?php
                echo $nim;
                ?> 
           </p>
            <p>
                <strong>Nama:</strong>
                <?php
                echo $nama;
                ?> 
        </p>
            <P>
                <strong>Tempat lahir:</strong>
                Pangkalpinang<?php
                echo $tempatlahir;
                ?> 
        </P>
            <p>
                <strong>Tanggal lahir:</strong>
                <?php
                echo $tanggallahir;
                ?> 
        </p>
            <p>
                <strong>Hobi:</strong>
              <?php
                echo $hobi;
                ?> 
        </p>
            <p>
                <strong>Pasangan:</strong>
                <?php
                echo $pasangan;
                ?> 
        </p>
            <p>
                <strong>Pekerjaan:</strong>
                <?php
                echo $pekerjaan;
                ?> 
        </p>
            <p>
                <strong>Nama Orang Tua:</strong>
               <?php
                echo $namaorangtua;
                ?> 
        </p>
            <p>
                <strong>Nama Kakak:</strong>
            <?php
                echo $namakakak;
                ?> 
        </p>
            <p>
                <strong>Nama adik:</strong>
            <?php
                echo $namaadik;
                ?> 
        </p>

        </section>
        <section id="ipk">
            <?php
        $namaMatkul1 = "Algoritma dan Struktur Data";
        $sksMatkul1 = 4;
        $nilaiHadir1 = 90;
        $nilaiTugas1 = 60;
        $nilaiUTS1 = 80;
        $nilaiUAS1 = 70;

        $namaMatkul2 = "Agama";
        $sksMatkul2 = 3;
        $nilaiHadir2 = 85;
        $nilaiTugas2 = 75;
        $nilaiUTS2 = 70;
        $nilaiUAS2 = 80;

        $namaMatkul3 = "Matematika";
        $sksMatkul3 = 3;
        $nilaiHadir3 = 100;
        $nilaiTugas3 = 90;
        $nilaiUTS3 = 95;
        $nilaiUAS3 = 85;

        $namaMatkul4 = "Fisika";
        $sksMatkul4 = 7;
        $nilaiHadir4 = 85;
        $nilaiTugas4 = 75;
        $nilaiUTS4 = 80;
        $nilaiUAS4 = 85;

        $namaMatkul5 = "Pemrograman Web Dasar";
        $sksMatkul5 = 3;
        $nilaiHadir5 = 69;
        $nilaiTugas5 = 80;
        $nilaiUTS5 = 90;
        $nilaiUAS5 = 100;

        function hitungNilaiAkhir($hadir, $tugas, $uts, $uas) {
            return (0.1 * $hadir) + (0.2 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
        }

        function hitungGrade($nilaiAkhir, $hadir) {
            if ($hadir < 70) return "E";
            elseif ($nilaiAkhir >= 91) return "A";
            elseif ($nilaiAkhir >= 81) return "A-";
            elseif ($nilaiAkhir >= 76) return "B+";
            elseif ($nilaiAkhir >= 71) return "B";
            elseif ($nilaiAkhir >= 66) return "B-";
            elseif ($nilaiAkhir >= 61) return "C+";
            elseif ($nilaiAkhir >= 56) return "C";
            elseif ($nilaiAkhir >= 51) return "C-";
            elseif ($nilaiAkhir >= 36) return "D";
            elseif ($nilaiAkhir >= 0) return "E";
            else return "E";
        }

        function konversiMutu($grade) {
            switch ($grade) {
                case "A": return 4.00;
                case "A-": return 3.70;
                case "B+": return 3.30;
                case "B": return 3.00;
                case "B-": return 2.70;
                case "C+": return 2.30;
                case "C": return 2.00;
                case "C-": return 1.70;
                case "D": return 1.00;
                case "E": return 0.00;
                default: return 0.00;
            }
        }
 $totalBobot = 0;
        $totalSKS = 0;

        for ($i = 1; $i <= 5; $i++) {
            $hadir = ${"nilaiHadir$i"};
            $tugas = ${"nilaiTugas$i"};
            $uts   = ${"nilaiUTS$i"};
            $uas   = ${"nilaiUAS$i"};
            $sks   = ${"sksMatkul$i"};
            $nama  = ${"namaMatkul$i"};

            $nilaiAkhir = hitungNilaiAkhir($hadir, $tugas, $uts, $uas);
            $grade = hitungGrade($nilaiAkhir, $hadir);
            $mutu = konversiMutu($grade);
            $bobot = $mutu * $sks;
            $status = ($grade == "D" || $grade == "E") ? "Gagal" : "Lulus";

            $totalBobot += $bobot;
            $totalSKS += $sks; 
             echo "<p><label><span>Nama Mata Kuliah ke-$i:</span></label>$nama</p>";
            echo "<p><label><span>SKS:</span></label>$sks</p>";
            echo "<p><label><span>Kehadiran:</span></label>$hadir</p>";
            echo "<p><label><span>Tugas:</span></label>$tugas</p>";
            echo "<p><label><span>UTS:</span></label>$uts</p>";
            echo "<p><label><span>UAS:</span></label>$uas</p>";
            echo "<p><label><span>Nilai Akhir:</span></label>" . number_format($nilaiAkhir, 2) . "</p>";
            echo "<p><label><span>Grade:</span></label>$grade</p>";
            echo "<p><label><span>Angka Mutu:</span></label>" . number_format($mutu, 2) . "</p>";
            echo "<p><label><span>Bobot:</span></label>" . number_format($bobot, 2) . "</p>";
            echo "<p><label><span>Status:</span></label>$status</p><hr>";
        }
       ?>
        
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
