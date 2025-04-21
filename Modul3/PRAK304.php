<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $gambar = "star-images.png";
        $jumlah = $_POST['jumlah'] ?? 0;

        if (isset($_POST['tambah'])) {
            $jumlah++;
        } elseif (isset($_POST['kurang']) && $jumlah > 0) {
            $jumlah--;
        }

        if (!isset($_POST['submit']) && !isset($_POST['tambah']) && !isset($_POST['kurang'])) {
    ?>

        <form method="post">
            Jumlah bintang: <input type="number" name="jumlah"><br>
            <button type="submit" name="submit">Submit</button>
        </form>

    <?php
    } else {
        echo "<p>Jumlah bintang: $jumlah</p>";
        for ($i = 0; $i < $jumlah; $i++) {
            echo "<img src='$gambar' width='70'>";
        }
    ?>

    <form method="post">
            <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
    </form>
    <?php } ?>
    </body>
</html>