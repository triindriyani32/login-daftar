<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "INSERT INTO tb_user (username, password) VALUES ('$username', '$password')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:login.php?status=sukses');
    }else{
        header('location:login.php?status=gagal');
    }
}
?>