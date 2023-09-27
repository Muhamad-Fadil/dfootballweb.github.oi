<?php 

include '../koneksi/koneksi.php';
$id = $_GET['id'];
$datas = mysqli_query($koneksi, "delete from player where id ='$id'") or die(mysqli_error($koneksi));

echo "<script>alert('Data berhasil dihapus.'); window.location='index.php';</script>";
