<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        <input type="text" name="teks">
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $teks = $_POST['teks'];
        $panjang = strlen($teks);

        echo "<h3>Input:</h3>";
        echo "<p>$teks</p>";
        echo "<h3>Output: </h3>";

        $i = 0;
        while ($i < $panjang) {
            $karakter = $teks[$i];
            echo strtoupper($karakter); // huruf pertama
            $j = 1;
            while ($j < $panjang) {
                echo strtolower($karakter);
                $j++;
            }
            $i++;
        }
    }
    ?>
</body>
</html>