<?php
$names = [
    "A1" => "Samsung Galaxy S22", "A2" => "Samsung Galaxy S22+", "A3" => "Samsung Galaxy A03", "A4" => "Samsung Galaxy Xcover 5"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            border: 3px double black;
            border-collapse: collapse;
        }
        th, td {
            border: 3px double black;
            padding: 3px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th style="background-color: red; font-size: 23px; padding: 15px;">Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?php echo $names["A1"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $names["A2"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $names["A3"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $names["A4"]; ?></td>
        </tr>
    </table>
</body>
</html>