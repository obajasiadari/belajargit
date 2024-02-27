<?php
include '../koneksi.php';

$nama_pelanggan = $_POST['nama_pelanggan'];
$nik = $_POST['nik'];
$no_hp = $_POST['no_hp'];
$kelas = $_POST['kelas'];
$tanggal = ['tanggal'];
$jml = $_POST['jml'];
$jml_lansia = $_POST['jml_lansia'];

//$harga = $_POST['harga'];
//$total = $_POST['total'];

if (isset($_POST['simpan'])) {
    $sql =
        "INSERT INTO tb_transaksi
		VALUES('','$nama_pelanggan','$nama','$nik','$no_hp','$kelas','$tanggal','$jml','$jml_lansia','','')";
    $query = mysqli_query($db, $sql);

    header("location:../index.html?p=tiket");
}
