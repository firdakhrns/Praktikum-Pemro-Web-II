<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Batas Bawah: <input type="number" name="bawah"><br>
        Batas Atas: <input type="number" name="atas"><br>
        <button type="submit" name="submit">Cetak</button>
    </form><br>

    <?php
    if (isset($_POST['submit'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];

        $gambar = "star-images.png";

        $i = $bawah;
        do {
            if (($i + 7) % 5 == 0) {
                echo "<img src='$gambar' width='20'>";
            } else {
                echo "$i ";
            }
            $i++;
        } while ($i <= $atas);
    }
    ?>
</body>
</html>