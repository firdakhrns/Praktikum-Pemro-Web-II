<?php
    if (isset($_POST['submit'])) {
        $angka = $_POST['angka'];
        if ($angka < 0 || $angka >= 1000) {
            $output = "Anda Menginput Melebihi Limit Bilangan";
        } elseif ($angka == 0) {
            $output = "Nol";
        } elseif ($angka < 10) {
            $output = "Satuan";
        } elseif ($angka < 20) {
            $output = "Belasan";
        } elseif ($angka < 100) {
            $output = "Puluhan";
        } else {
            $output = "Ratusan";
        }
    }
?>
<form method="post">
    Nilai: <input type="number" name="angka" value="<?= $angka ?>"><br>
    <input type="submit" name="submit" value="Konversi">
</form>
<?php
    if (isset($output)) {
        echo "<h2>Hasil: $output</h2>";
    }
?>