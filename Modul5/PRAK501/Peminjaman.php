<?php
require 'Model.php';

if (isset($_GET['delete'])) {
    deletePeminjaman($_GET['delete']);
    header("Location: Peminjaman.php");
}

$peminjaman = getAllPeminjaman();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e6f0ff; }
        .navbar { background-color: #4d94ff; }
    </style>
</head>
<body>
<nav class="navbar navbar-dark mb-4">
    <div class="container-fluid">
        <span class="navbar-brand">Perpustakaan - Daftar Peminjaman</span>
    </div>
</nav>

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">Daftar Peminjaman</div>
        <div class="card-body">
            <a href="FormPeminjaman.php" class="btn btn-success mb-3">+ Tambah Peminjaman</a>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Member</th>
                        <th>Judul Buku</th>
                        <th>Tgl Pinjam</th>
                        <th>Tgl Kembali</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; while ($row = $peminjaman->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['nama_member'] ?></td>
                            <td><?= $row['judul_buku'] ?? 'Buku telah dihapus' ?></td>
                            <td><?= $row['tgl_pinjam'] ?></td>
                            <td><?= $row['tgl_kembali'] ?></td>
                            <td>
                                <a href="FormPeminjaman.php?id=<?= $row['id_peminjaman'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="Peminjaman.php?delete=<?= $row['id_peminjaman'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-outline-primary mb-3">&#8592; Kembali ke Beranda</a>
        </div>
    </div>
</div>
</body>
</html>