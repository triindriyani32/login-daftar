<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
    <center>
    <h2>Daftar User Login</h2>
    <br/>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "sukses"){
            echo "PENDAFTARAN BERHASIL-!! SILAHKAN LOGIN-!!";
        }else if($_GET['pesan'] == "gagal"){
            echo "GAGAL MENDAFTAR-!!";
        }
    }
    ?>
    <br/>
    <br/>
    <form action="proses_daftar.php" method="POST">
    <form>
    
        <table>
            <p>
                <label for="nama_lengkap" > Nama Lengkap :</label>
                <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap anda">
            </p>
            <p>
                <label for="username">Username : </label>
                <input type="text" name="username" placeholder="Masukkan Username Anda">
            </p>
            <p>
                <label for="password">Password : </label>
                <input type="password" name="password" placeholder="Masukkan Password Anda">
            </p>
            <p> 
                <label for="e-mail">E-mail : </label>
                <input type="text" name="e-mail" placeholder="Masukkan E-mail Anda">
            </p>
            <p>
                <label for="jk"> Jenis Kelamin :</label>
                    <label><input type="radio" name="jk" Value="laki-laki"/>Laki-Laki</label>
                    <label><input type="radio" name="jk" Value="perempuan"/>Perempuan</label>
            </p>
            <p>
                <label for="no_telp">No.Telp :</label>
                <input type="number" name="no_telp" placeholder="Masukkan No.Telp Anda">
            </p>
            <p>
                <input type="submit" name="daftar" value="Daftar">
            </p>
        </table>

</form>
</center>
</body>
</html>