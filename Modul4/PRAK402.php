<!DOCTYPE html>
<html>
<head>
    <title>PRAK402 - Nilai Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ccc; 
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php
        $data = [
            ["Andi", "2101001", 87, 65],
            ["Budi", "2101002", 76, 79],
            ["Tono", "2101003", 50, 41],
            ["Jessica", "2101004", 60, 75]
        ];

        foreach ($data as $row) {
            $uts = $row[2];
            $uas = $row[3];
            $akhir = 0.4 * $uts + 0.6 * $uas;

            if ($akhir >= 80) $huruf = "A";
            elseif ($akhir >= 70) $huruf = "B";
            elseif ($akhir >= 60) $huruf = "C";
            elseif ($akhir >= 50) $huruf = "D";
            else $huruf = "E";

            echo "<tr>
                <td>{$row[0]}</td>
                <td>{$row[1]}</td>
                <td>{$uts}</td>
                <td>{$uas}</td>
                <td>" . number_format($akhir, 1) . "</td>
                <td>{$huruf}</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>