<?php
    function konversi($nilai, $from, $to) {
        $c = 0;
        switch ($from) {
            case 'C': $c = $nilai; break;
            case 'F': $c = ($nilai - 32) * 5/9; break;
            case 'K': $c = $nilai - 273.15; break;
            case 'Re': $c = $nilai * 5/4; break;
        }

        switch ($to) {
            case 'C': return $c;
            case 'F': return $c * 9/5 + 32;
            case 'K': return $c + 273.15;
            case 'Re': return $c * 4/5;
        }
        return null;
    }

    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $from = $_POST['from'];
        $to = $_POST['to'];
        $hasil = konversi($nilai, $from, $to);
    }
?>

<form method="post">
    Nilai: <input type="number" name="nilai" value="<?= isset($nilai) ? $nilai : '' ?>"><br>
    Dari: <br>
    <input type="radio" name="from" value="C" <?= (isset($from) && $from == 'C') ? 'checked' : '' ?>>Celsius</input><br>
    <input type="radio" name="from" value="F" <?= (isset($from) && $from == 'F') ? 'checked' : '' ?>>Fahrenheit</input><br>
    <input type="radio" name="from" value="K" <?= (isset($from) && $from == 'K') ? 'checked' : '' ?>>Kelvin</input><br>
    <input type="radio" name="from" value="Re" <?= (isset($from) && $from == 'Re') ? 'checked' : '' ?>>Reamur</input><br>
    Ke: <br>
    <input type="radio" name="to" value="C" <?= (isset($to) && $to == 'C') ? 'checked' : '' ?>>Celsius</input><br>
    <input type="radio" name="to" value="F" <?= (isset($to) && $to == 'F') ? 'checked' : '' ?>>Fahrenheit</input><br>
    <input type="radio" name="to" value="K" <?= (isset($to) && $to == 'K') ? 'checked' : '' ?>>Kelvin</input><br>
    <input type="radio" name="to" value="Re" <?= (isset($to) && $to == 'Re') ? 'checked' : '' ?>>Reamur</input><br>
    <input type="submit" name="submit" value="Konversi">
</form>

<?php
    if (isset($hasil)) {
        $satuan = [
            'C' => '&#176;C',
            'F' => '&#176;F',
            'K' => 'K',
            'Re' => '&#176;Re'
        ];
    echo "<h2>Hasil Konversi: $hasil {$satuan[$to]}</h2>";
    }
?>