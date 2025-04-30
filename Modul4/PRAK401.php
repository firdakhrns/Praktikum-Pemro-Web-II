<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 7px;
            text-align: center;
            min-width: 10px;
        }
    </style>
</head>
<body>
    <form method="post">
        Panjang: <input type="number" name="panjang" required><br>
        Lebar: <input type="number" name="lebar" required><br>
        Nilai: <input type="text" name="nilai" required><br>
        <input type="submit" value="Cetak">
    </form><br>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = (int)$_POST["panjang"];
        $lebar = (int)$_POST["lebar"];
        $input = trim($_POST["nilai"]);

        $angka = explode(" ", $input);
        $jumlahNilai = count($angka);
        $ukuranMatriks = $panjang * $lebar;

        if ($jumlahNilai != $ukuranMatriks) {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        } else {
            echo "<table>";
            $index = 0;
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . htmlspecialchars($angka[$index]) . "</td>";
                    $index++;
                }
                echo "</tr>";
            }
            echo "</table>";
            }
        }
    ?>
</body>
</html>