<?php
$names = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            border: 3px double black;
            border-collapse: collapse;
            width: 30%;
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
        <tr><th>Daftar Smartphone Samsung</th></tr>
        <?php for ($i = 0; $i < count($names); $i++) { ?>
            <tr>
                <td><?php echo $names[$i]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>