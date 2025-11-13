<?php
session_start();
$sesnama = $_POST["txtNama"];
$sesemail = $_POST["txtEmail"];
$sespesan = $_POST["txtPesan"];
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;
header("location: index.php");
?>

<?php
$sesnim = $_POST["txtNim"];
$sesnama = $_POST["txtNama"];
$sestempat_lahir = $_POST["txtTempat_lahir"];
$sestanggal_lahir = $_POST["txtTanggal_lahir"];
$seshobi = $_POST["txtHobi"];
$sespasangan = $_POST["txtPasangan"];
$sespekerjaan = $_POST["txtPekerjaan"];
$sesnamaortu = $_POST["txtNama_ortu"];
$seskakak = $_POST["txtNama_kakak"];
$sesadik = $_POST["txtNama_adik"];

$_SESSION["sesNim"] = $sesnim;
$_SESSION["sesNama"] = $sesnama;
$_SESSION["sesTempat_lahir"] = $sestempat_lahir;
$_SESSION["sesTanggal_lahir"] = $sestanggal_lahir;
$_SESSION["sesHobi"] = $seshobi;
$_SESSION["sesPasangan"] = $sespasangan;
$_SESSION["sesPekerjaan"] = $sespekerjaan;
$_SESSION["sesNama_ortu"] = $sesnama_ortu;
$_SESSION["sesNama_kakak"] = $sesnama_kakak;
$_SESSION["sesNama_adik"] = $sesnama_adik;
header("location: index.php");
?>