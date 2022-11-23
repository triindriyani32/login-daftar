<html>
    <head>
</head>
<body>
    <h1>Tambah</h1>
    <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_pemilik">Nama Pemilik: </label>
                    <input type="text" name="nama_pemilik" />
                </P>
                <p>
                    <label for="jenis_hewan"> Jenis Hewan: </label>
                    <label><input type="radio" name="jenis_hewan" Value="kucing"/>Kucing</label>
                    <label><input type="radio" name="jenis_hewan" Value="anjing"/>Anjing</label>
                    <label><input type="radio" name="jenis_hewan" Value="ular"/>Ular</label>
                </p>
                <p>
                    <label for="keluhan"> Keluhan: </label>
                    <input type="text" name="keluhan" />
                </p>
                <input type="submit" name="tambah" value="tambah" >
                </p>
</fildset>
</form>
</bod>
</html>
