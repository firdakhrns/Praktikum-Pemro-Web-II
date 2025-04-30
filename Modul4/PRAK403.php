<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px; 
            margin: 0 auto;
        }
        th {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
            background-color: #ccc; 
        }
        td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
        }
        .revisi {
            background-color: red;
        }
        .tidak-revisi {
            background-color: green;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>

        <?php
        $data = [
            [
                "nama" => "Ridho",
                "matkul" => [
                    ["Pemrograman I", 2],
                    ["Praktikum Pemrograman I", 1],
                    ["Pengantar Lingkungan Lahan Basah", 2],
                    ["Arsitektur Komputer", 3]
                ]
            ],
            [
                "nama" => "Ratna",
                "matkul" => [
                    ["Basis Data I", 2],
                    ["Praktikum Basis Data I", 1],
                    ["Kalkulus", 3]
                ]
            ],
            [
                "nama" => "Tono",
                "matkul" => [
                    ["Rekayasa Perangkat Lunak", 3],
                    ["Analisis dan Perancangan Sistem", 3],
                    ["Komputasi Awan", 3],
                    ["Kecerdasan Bisnis", 3]
                ]
            ]
        ];

        $no = 1;
        foreach ($data as $mhs) {
            $totalSKS = 0;
            foreach ($mhs['matkul'] as $mk) {
                $totalSKS += $mk[1];
            }

            $isRevisi = $totalSKS < 7;
            $keterangan = $isRevisi ? "Revisi KRS" : "Tidak Revisi";
            $classKeterangan = $isRevisi ? "revisi" : "tidak-revisi";

            $mk0 = $mhs['matkul'][0];
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$mhs['nama']}</td>
                    <td>{$mk0[0]}</td>
                    <td>{$mk0[1]}</td>
                    <td>{$totalSKS}</td>
                    <td class='{$classKeterangan}'>{$keterangan}</td>
                </tr>";

            for ($i = 1; $i < count($mhs['matkul']); $i++) {
                $mk = $mhs['matkul'][$i];
                echo "<tr>
                        <td></td>
                        <td></td>
                        <td>{$mk[0]}</td>
                        <td>{$mk[1]}</td>
                        <td></td>
                        <td></td>
                    </tr>";
            }

            $no++;
        }
        ?>
    </table>
</body>
</html>