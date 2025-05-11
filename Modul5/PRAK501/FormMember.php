<?php
require 'Model.php';

$id = '';
$nama = '';
$nomor = '';
$alamat = '';
$tgl_mendaftar = '';
$tgl_terakhir_bayar = '';

if (isset($_GET['id'])) {
    $data = getMemberById($_GET['id']);
    $id = $data['id_member'];
    $nama = $data['nama_member'];
    $nomor = $data['nomor_member'];
    $alamat = $data['alamat'];
    $tgl_mendaftar = $data['tgl_mendaftar'];
    $tgl_terakhir_bayar = $data['tgl_terakhir_bayar'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['id'] == '') {
        insertMember($_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    } else {
        updateMember($_POST['id'], $_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    }
    header("Location: Member.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e6f0ff; }
        .navbar { background-color: #4d94ff; }
    </style>
</head>
<body>
<nav class="navbar navbar-dark mb-4">
    <div class="container-fluid">
        <span class="navbar-brand">Perpustakaan - Form Member</span>
    </div>
</nav>

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">Formulir Member</div>
        <div class="card-body">
            <form method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor</label>
                    <input type="text" name="nomor" class="form-control" value="<?= $nomor ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" required><?= $alamat ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Mendaftar</label>
                    <input type="datetime-local" name="tgl_mendaftar" class="form-control" value="<?= $tgl_mendaftar ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Terakhir Bayar</label>
                    <input type="date" name="tgl_terakhir_bayar" class="form-control" value="<?= $tgl_terakhir_bayar ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="Member.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>