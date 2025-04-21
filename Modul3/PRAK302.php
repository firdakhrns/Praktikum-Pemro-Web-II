<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Tinggi: <input type="number" name="tinggi"><br>
        Alamat Gambar: <input type="text" name="gambar"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];
        $gambar = $_POST['gambar'];

        echo "<div style='display: inline-block; text-align: right; margin-top: 20px;'>";
        $i = 0;
        while ($i < $tinggi) {
            $j = $tinggi - $i;
            while ($j > 0) {
                echo "<img src='$gambar' width='30' style='margin:1px'>";
                $j--;
            }
            echo "<br>";
            $i++;
        }
        echo "</div>";
    }
    ?>
</body>
</html>