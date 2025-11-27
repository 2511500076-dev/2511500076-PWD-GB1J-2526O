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

$_SESSION["txtNim"] = $sesnim;
$_SESSION["txtNama"] = $sesnama;
$_SESSION["txtTempat_lahir"] = $sestempat_lahir;
$_SESSION["txtTanggal_lahir"] = $sestanggal_lahir;
$_SESSION["txtHobi"] = $seshobi;
$_SESSION["txtPasangan"] = $sespasangan;
$_SESSION["txtPekerjaan"] = $sespekerjaan;
$_SESSION["txtNama_ortu"] = $sesnama_ortu;
$_SESSION["txtNama_kakak"] = $sesnama_kakak;
$_SESSION["txtNama_adik"] = $sesnama_adik;
header("location: index.php");
?>