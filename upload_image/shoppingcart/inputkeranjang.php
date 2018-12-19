<?php
session_start();
if(!isset($_SESSION['transaksi'])){
    $idt = date("YmdHis");
    $_SESSION['transaksi'] = $idt;
}

$idtransaksi = $_SESSION['transaksi'];
$kode = $_GET['kode'];
if(!isset($kode)){
    die("tidak ada transaksi");
}

include "config.php";
mysql_connect($HOST,$USER_NAME,$PASSWORD) or die("tidak bisa koneksi ke database");
mysql_select_db($DB);

$pakaian = mysql_query("select * from tabelbarang where kode=$kode");
$b = mysql_fetch_array($pakaian);
$harga = $b['harga'];

$masuk = mysql_query("insert into tabelpesan values(null,'$idtransaksi',$kode,1,$harga)");
if($masuk){
    header("location:keranjang.php");
}else{
    echo "error";
}
?>
