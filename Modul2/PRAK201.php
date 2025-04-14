<!DOCTYPE html>
<body>
    <?php
        $nama1 = $nama2 = $nama3 = "";

        if (isset($_POST['Urut'])) {
            $nama1 = $_POST['nama1'];
            $nama2 = $_POST['nama2'];
            $nama3 = $_POST['nama3'];

            $daftar_nama = [$nama1, $nama2, $nama3];
            sort($daftar_nama);
        }
    ?>

    <form action="" method="POST">
        Nama: 1 <input type="text" name="nama1" value="<?= $nama1 ?>"><br>
        Nama: 2 <input type="text" name="nama2" value="<?= $nama2 ?>"><br>
        Nama: 3 <input type="text" name="nama3" value="<?= $nama3 ?>"><br>
        <button type="submit" name="Urut">Urutkan</button>
    </form>   
    
    <?php
    if (isset($_POST['Urut'])) {
        foreach ($daftar_nama as $nama) {
            echo $nama . "<br>";
        }
    }
    ?>
</body>
</html>