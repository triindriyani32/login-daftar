<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
$nama_pemilik=$_POST['nama_pemilik'];
$jenis_hewan=$_POST['jenis_hewan'];
$keluhan=$_POST['keluhan'];

$sql="INSERT INTO tb_pemeriksaan(nama_pemilik, jenis_hewan, keluhan) VALUES('$nama_pemilik','$jenis_hewan','$keluhan')";
$query=mysqli_query($koneksi,$sql);

if($query){
    header('location:hewan.php?status=sukses');
}else{
    header('location:hewan.php?status=gagal');
}
}
?>