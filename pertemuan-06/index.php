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
             $sksMatkul1 = "4";
             $nilaiHadir1 = "90";
             $nilaiTugas1 = "60";
             $nilaiUTS1 = "80";
             $nilaiUAS1 = "70";
             $nilaiAkhir1 = "73"; 
             $grade1 = "B";
             $mutu1 = "3.00";
             $bobot1 = "12";
             $status1 = "Lulus";
             $namaMatkul2 = "Agama";
             $sksMatkul2 = "2";
             $nilaiHadir2 = "70";
             $nilaiTugas2 = "50";
             $nilaiUTS2 = "60";
             $nilaiUAS2 = "80";
             $nilaiAkhir2 = "67"; 
             $grade2 = "B-";
             $mutu2 = "2.70";
             $bobot2 = "5.40";
             $status2 = "Lulus";
             $namaMatkul3 = "Matematika";
             $sksMatkul3 = "4";
             $nilaiHadir3 = "80";
             $nilaiTugas3 = "70";
             $nilaiUTS3 = "75";
             $nilaiUAS3 = "80";
             $nilaiAkhir3 = "76.50"; 
             $grade3 = "B+";
             $mutu3 = "3.30";
             $bobot3 = "13.20";
             $status3 = "Lulus";
             $namaMatkul4 = "Fisika";
             $sksMatkul4 = "7";
             $nilaiHadir4 = "85";
             $nilaiTugas4 = "75";
             $nilaiUTS4 = "80";
             $nilaiUAS4 = "85";
             $nilaiAkhir4 = "81.50"; 
             $grade4 = "A-";
             $mutu4 = "3.70";
             $bobot4 = "25.90";
             $status4 = "Lulus";
             $namaMatkul5 = "Pemrograman Web Dasar";
             $sksMatkul5 = "3";
             $nilaiHadir5 = "69";
             $nilaiTugas5 = "80";
             $nilaiUTS5 = "90";
             $nilaiUAS5 = "100";
             $nilaiAkhir5 = "89.90"; 
             $grade5 = "E";
             $mutu5 = "0.00";
             $bobot5 = "0.00";
             $status5 = "Gagal";

            ?>
            <h2>Nilai Saya</h2>
            <p>
                <label>Nama Matakuliah ke-1:</label>
                <?php 
            echo $namaMatkul1
            ?>
            </p>
            <p>
                <label>SKS:</label>
            <?php 
            echo $sksMatkul1
            ?>
        </p>
            <P>
                <label>Kehadiran:</label>
                <?php 
                echo $nilaiHadir1
                ?>
            </P>
            <p>
                <label>Tugas:</label>
                <?php 
                echo $nilaiTugas1
                ?>
            </p>
            <p><label>UTS:</label>
            <?php
            echo $nilaiUTS1
             ?>
        </p>
            <p>
                <label>UAS:</label>
            <?php 
            echo $nilaiUAS1
            ?>
        </p>
            <p>
                <label>Nilai Akhir:</label>
                <?php 
                echo $nilaiAkhir1
                ?>
        </p>
            <p>
                <label>Grade:</label>
            <?php 
            echo $grade1
            ?>
        </p>
            <p>
                <label>Angka Mutu:</label>
            <?php 
            echo $mutu1
            ?>
        </p>
            <p>
                <label>Bobot:</label>
            <?php 
            echo $bobot1
            ?>
        </p>
            <p>
                <label>Status:</label>
            <?php 
            echo $status1
            ?>
        </p>
        <p>
                <label>Nama Matakuliah ke-2:</label>
                <?php 
            echo $namaMatkul2
            ?>
            </p>
            <p>
                <label>SKS:</label>
            <?php 
            echo $sksMatkul2
            ?>
        </p>
            <P>
                <label>Kehadiran:</label>
                <?php 
                echo $nilaiHadir2
                ?>
            </P>
            <p>
                <label>Tugas:</label>
                <?php 
                echo $nilaiTugas2
                ?>
            </p>
            <p><label>UTS:</label>
            <?php
            echo $nilaiUTS2
             ?>
        </p>
            <p>
                <label>UAS:</label>
            <?php 
            echo $nilaiUAS2
            ?>
        </p>
            <p>
                <label>Nilai Akhir:</label>
                <?php 
                echo $nilaiAkhir2
                ?>
        </p>
            <p>
                <label>Grade:</label>
            <?php 
            echo $grade2
            ?>
        </p>
            <p>
                <label>Angka Mutu:</label>
            <?php 
            echo $mutu2
            ?>
        </p>
            <p>
                <label>Bobot:</label>
            <?php 
            echo $bobot2
            ?>
        </p>
            <p>
                <label>Status:</label>
            <?php 
            echo $status2
            ?>
        </p>
        <p>
                <label>Nama Matakuliah ke-3:</label>
                <?php 
            echo $namaMatkul3
            ?>
            </p>
            <p>
                <label>SKS:</label>
            <?php 
            echo $sksMatkul3
            ?>
        </p>
            <P>
                <label>Kehadiran:</label>
                <?php 
                echo $nilaiHadir3
                ?>
            </P>
            <p>
                <label>Tugas:</label>
                <?php 
                echo $nilaiTugas3
                ?>
            </p>
            <p><label>UTS:</label>
            <?php
            echo $nilaiUTS3
             ?>
        </p>
            <p>
                <label>UAS:</label>
            <?php 
            echo $nilaiUAS3
            ?>
        </p>
            <p>
                <label>Nilai Akhir:</label>
                <?php 
                echo $nilaiAkhir3
                ?>
        </p>
            <p>
                <label>Grade:</label>
            <?php 
            echo $grade3
            ?>
        </p>
            <p>
                <label>Angka Mutu:</label>
            <?php 
            echo $mutu3
            ?>
        </p>
            <p>
                <label>Bobot:</label>
            <?php 
            echo $bobot3
            ?>
        </p>
            <p>
                <label>Status:</label>
            <?php 
            echo $status3
            ?>
        </p>
         <p>
                <label>Nama Matakuliah ke-4:</label>
                <?php 
            echo $namaMatkul4
            ?>
            </p>
            <p>
                <label>SKS:</label>
            <?php 
            echo $sksMatkul4
            ?>
        </p>
            <P>
                <label>Kehadiran:</label>
                <?php 
                echo $nilaiHadir4
                ?>
            </P>
            <p>
                <label>Tugas:</label>
                <?php 
                echo $nilaiTugas4
                ?>
            </p>
            <p><label>UTS:</label>
            <?php
            echo $nilaiUTS4
             ?>
        </p>
            <p>
                <label>UAS:</label>
            <?php 
            echo $nilaiUAS4
            ?>
        </p>
            <p>
                <label>Nilai Akhir:</label>
                <?php 
                echo $nilaiAkhir4
                ?>
        </p>
            <p>
                <label>Grade:</label>
            <?php 
            echo $grade4
            ?>
        </p>
            <p>
                <label>Angka Mutu:</label>
            <?php 
            echo $mutu4
            ?>
        </p>
            <p>
                <label>Bobot:</label>
            <?php 
            echo $bobot4
            ?>
        </p>
            <p>
                <label>Status:</label>
            <?php 
            echo $status4
            ?>
        </p>
         <p>
                <label>Nama Matakuliah ke-5:</label>
                <?php 
            echo $namaMatkul5
            ?>
            </p>
            <p>
                <label>SKS:</label>
            <?php 
            echo $sksMatkul5
            ?>
        </p>
            <P>
                <label>Kehadiran:</label>
                <?php 
                echo $nilaiHadir5
                ?>
            </P>
            <p>
                <label>Tugas:</label>
                <?php 
                echo $nilaiTugas5
                ?>
            </p>
            <p><label>UTS:</label>
            <?php
            echo $nilaiUTS5
             ?>
        </p>
            <p>
                <label>UAS:</label>
            <?php 
            echo $nilaiUAS5
            ?>
        </p>
            <p>
                <label>Nilai Akhir:</label>
                <?php 
                echo $nilaiAkhir5
                ?>
        </p>
            <p>
                <label>Grade:</label>
            <?php 
            echo $grade5
            ?>
        </p>
            <p>
                <label>Angka Mutu:</label>
            <?php 
            echo $mutu5
            ?>
        </p>
            <p>
                <label>Bobot:</label>
            <?php 
            echo $bobot5
            ?>
        </p>
            <p>
                <label>Status:</label>
            <?php 
            echo $status5
            ?>
        </p>
        <?php
        $nilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);
$nilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
$nilaiAkhir3 = (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);
$nilaiAkhir4 = (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);
$nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);

function tentukanGrade($nilaiAkhir, $kehadiran) {
  if ($kehadiran < 70) {
    return "E";
  } elseif ($nilaiAkhir >= 85) {
    return "A";
  } elseif ($nilaiAkhir >= 80) {
    return "B+";
  } elseif ($nilaiAkhir >= 70) {
    return "B";
  } elseif ($nilaiAkhir >= 60) {
    return "C+";
  } elseif ($nilaiAkhir >= 55) {
    return "C";
  } elseif ($nilaiAkhir >= 40) {
    return "D";
  } else {
    return "E";
  }
}

$grade1 = tentukanGrade($nilaiAkhir1, $nilaiHadir1);
$grade2 = tentukanGrade($nilaiAkhir2, $nilaiHadir2);
$grade3 = tentukanGrade($nilaiAkhir3, $nilaiHadir3);
$grade4 = tentukanGrade($nilaiAkhir4, $nilaiHadir4);
$grade5 = tentukanGrade($nilaiAkhir5, $nilaiHadir5);

function konversiMutu($grade) {
  if ($grade == "A") return 4.00;
  elseif ($grade == "B+") return 3.50;
  elseif ($grade == "B") return 3.00;
  elseif ($grade == "C+") return 2.50;
  elseif ($grade == "C") return 2.00;
  elseif ($grade == "D") return 1.00;
  else return 0.00;
}

$mutu1 = konversiMutu($grade1);
$mutu2 = konversiMutu($grade2);
$mutu3 = konversiMutu($grade3);
$mutu4 = konversiMutu($grade4);
$mutu5 = konversiMutu($grade5);

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
