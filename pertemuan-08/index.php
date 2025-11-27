<?php
session_start();

$sesnim = "";
if (isset($_SESSION["sesNim"])):
  $sesnama = $_SESSION["sesNim"];
endif;

$sesnama = "";
if (isset($_SESSION["sesNama"])):
  $sesnama = $_SESSION["sesNama"];
endif;

$sestempat_lahir = "";
if (isset($_SESSION["sesTempat_lahir"])):
  $sesemail = $_SESSION["sesTempat_lahir"];
endif;

$sestanggal_lahir = "";
if (isset($_SESSION["sesTanggal_lahir"])):
  $sespesan = $_SESSION["sesTanggal_lahir"];
endif;

$seshobi = "";
if (isset($_SESSION["sesHobi"])):
  $sesnama = $_SESSION["sesHobi"];
endif;

$sespasangan = "";
if (isset($_SESSION["sesPasangan"])):
  $sesnama = $_SESSION["sesPasangan"];
endif;

$sespekerjaan = "";
if (isset($_SESSION["sesPekerjaan"])):
  $sesnama = $_SESSION["sesPekerjaan"];
endif;

$sesnama_ortu = "";
if (isset($_SESSION["sesNama_ortu"])):
  $sesnama = $_SESSION["sesNama_ortu"];
endif;

$sesnama_kakak = "";
if (isset($_SESSION["sesNama_kakak"])):
  $sesnama = $_SESSION["sesNama_kakak"];
endif;

$sesnama_adik = "";
if (isset($_SESSION["sesNama_adik"])):
  $sesnama = $_SESSION["sesNama_adik"];
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="biodata"> 
      <h2>Biodata Sederhana Mahasiswa</h2>
      <form action="proses.php" method="POST">

        <label for="txtNim"><span>Nim:</span>
          <input type="text" id="txtNim" name="txtNim" placeholder="Masukkan Nim Anda" required autocomplete="nim">
        </label>

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan Nama Anda" required autocomplete="nama">
        </label>

        <label for="txtTempat_lahir"><span>Tempat Lahir:</span>
          <input type="text" id="txtTempat_lahir" name="txtTempat_lahir" placeholder="Masukkan Tempat Lahir Anda" required autocomplete="tempatlahir">
        </label>

        <label for="txtTanggal_lahir"><span>Tanggal Lahir:</span>
          <input type="text" id="txtTanggal_lahir" name="txtTanggal_lahir" placeholder="Masukkan Tanggal Lahir Anda" required autocomplete="tanggallahir">
        </label>

         <label for="txtHobi"><span>Hobi:</span>
          <input type="text" id="txtHobi" name="txtHobi" placeholder="Masukkan Hobi Anda" required autocomplete="hobi">
        </label>

        <label for="txtPasangan"><span>Pasangan:</span>
          <input type="text" id="txtPasangan" name="txtPasangan" placeholder="Masukkan Nama Pasangan Anda" required autocomplete="pasangan">
        </label>

        <label for="txtPekerjaan"><span>Pekerjaan:</span>
          <input type="text" id="txtPekerjaan" name="txtPekerjaan" placeholder="Masukkan Pekerjaan Anda" required autocomplete="pekerjaan">
        </label>


        <label for="txtNama_ortu"><span>Nama Orang Tua:</span>
          <input type="text" id="txtNama_ortu" name="txtNama_ortu" placeholder="Masukkan Nama Orang Tua Anda" required autocomplete="namaorangtua">
        </label>

        <label for="txtNama_kakak"><span>Nama Kakak:</span>
          <input type="text" id="txtNama_kakak" name="txtNama_kakak" placeholder="Masukkan Nama Kakak Anda" required autocomplete="namakakak">
        </label>

        <label for="txtNama_adik"><span>Nama Adik:</span>
          <input type="text" id="txtNama_adik" name="txtNama_adik" placeholder="Masukkan Nama Adik Anda" required autocomplete="namaadik">
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
        </form>
    </section>

    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
         $sesnim;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $sesnama;
        ?> 
      </p>
      <p><strong>Tempat Lahir:</strong> <?php echo  $sestempat_lahir ?></p>
      <p><strong>Tanggal Lahir:</strong> <?php echo $sestanggal_lahir ?></p>
      <p><strong>Hobi:</strong> <?php echo $seshobi ?> </p>
      <p><strong>Pasangan:</strong> <?php echo $sespasangan ?> </p>
      <p><strong>Pekerjaan:</strong> <?php echo $sespekerjaan ?> </p>
      <p><strong>Nama Orang Tua:</strong><?php echo $sesnama_ortu ?> </p>
      <p><strong>Nama Kakak:</strong> <?php echo $sesnama_kakak ?></p>
      <p><strong>Nama Adik:</strong> <?php echo $sesnama_adik ?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>