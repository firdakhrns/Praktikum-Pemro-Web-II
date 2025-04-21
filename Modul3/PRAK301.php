<!DOCTYPE html>
<html lang="en">
    <body>
        <form action="" method="post">
            Jumlah Peserta: <input type="text" name="peserta" value="<?= $_POST['peserta'] ?? '' ?>"><br>
            <button type="submit" name="submit">Cetak</button>
        </form>

        <?php
            if (isset($_POST['submit'])) {
                $jumlah = $_POST['peserta'];

                $i = 1;
                while ($i <= $jumlah) {
                    if ($i % 2 == 1) {
                        echo "<h2 style='color:red;'>Peserta ke- $i</h2>";
                    } else{
                        echo "<h2 style='color:green;'>Peserta ke- $i</h2>";
                    }
                    $i++;
                }
            }
        ?>
    </body>
</html>