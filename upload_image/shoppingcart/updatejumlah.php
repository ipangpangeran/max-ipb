<?php
include "config.php";
mysql_connect($HOST,$USER_NAME,$PASSWORD) or die("tidak bisa koneksi ke database");
mysql_select_db($DB);

$id = $_GET['id'];
$jml = $_GET['jml'];
$harga = mysql_query("select tabelbarang.harga from tabelbarang, tabelpesan
where tabelbarang.kode=tabelpesan.idproduk and tabelpesan.nomor=$id");
$h = mysql_fetch_array($harga);
$harganya = $h['harga'];
$hargabaru = $harganya*$jml;
$update = mysql_query("update tabelpesan set jumlah=$jml, harga=$hargabaru where nomor=$id");
if($update){
    $ambil = mysql_query("select harga from tabelpesan where nomor=$id");
    $a = mysql_fetch_array($ambil);
    echo $a['harga'];
}else{
    echo "error";
}
?>
