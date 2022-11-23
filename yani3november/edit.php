<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header ("Location:hewan.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_pemeriksaan WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);
$penduduk = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("DATA TIDAK DITEMUKAN");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <center>
    <h2>Form Edit</h2>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $db_yani3nov ['id'] ?>"/>
        <p>
        <label for="nama_pemilik">Nama :</label>
        <input type="text" name="nama_pemilik" value="<?php echo $db_yani3nov ['nama_pemilik'] ?>"/>
        </p>
        <p>
        <label for="jenis_hewan">Jenis Hewan : </label>
                <select name="jenis_hewan" value="<?php echo $db_yani3nov['jenis_hewan']?>" >
                <option value="kucing"> Kucing :</option>
                <option value="anjing"> anjing :</option>
                <option value="ular"> ular :</option>
           </select>
            </p>
            <p>
                <label for="keluhan"> Keluhan:</label>
                <input type="text" name="keluhan" value="<?php echo $db_yani3nov['keluhan']?>" />
            </p>

        <p>
            <input type="submit" value="Edit" name="edit" />
        </p>
</center>
</body>
</html>
