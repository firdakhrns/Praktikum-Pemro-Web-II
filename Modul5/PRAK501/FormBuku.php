<?php
require 'Model.php';

$id = '';
$judul = '';
$penulis = '';
$penerbit = '';
$tahun = '';

if (isset($_GET['id'])) {
    $data = getBookById($_GET['id']);
    $id = $data['id_buku'];
    $judul = $data['judul_buku'];
    $penulis = $data['penulis'];
    $penerbit = $data['penerbit'];
    $tahun = $data['tahun_terbit'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['id'] == '') {
        insertBook($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun']);
    } else {
        updateBook($_POST['id'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun']);
    }
    header("Location: Buku.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e6f0ff; }
        .navbar { background-color: #4d94ff; }
    </style>
</head>
<body>
<nav class="navbar navbar-dark mb-4">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Perpustakaan - Form Buku</span>
    </div>
</nav>

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">Formulir Buku</div>
        <div class="card-body">
            <form method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" value="<?= $judul ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" value="<?= $penulis ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="<?= $penerbit ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="number" name="tahun" class="form-control" value="<?= $tahun ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="Buku.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>