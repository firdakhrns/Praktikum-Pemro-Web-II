<?php
require 'Model.php';
if (isset($_GET['delete'])) {
    deleteBook($_GET['delete']);
    header("Location: Buku.php");
}
$buku = getAllBooks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Buku - Perpustakaan</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #e6f0ff;
    }
    .navbar {
        background-color: #4d94ff;
    }
    .btn-primary {
        background-color: #4d94ff;
        border-color: #4d94ff;
    }
    .btn-primary:hover {
        background-color: #337fd9;
        border-color: #337fd9;
    }
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Perpustakaan Digital</a>
        <a href="index.php" class="btn btn-outline-light">Beranda</a>
    </div>
</nav>

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">Daftar Buku</div>
        <div class="card-body">
            <a href="FormBuku.php" class="btn btn-success mb-3">+ Tambah Buku</a>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun</th><th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $buku->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id_buku'] ?></td>
                        <td><?= $row['judul_buku'] ?></td>
                        <td><?= $row['penulis'] ?></td>
                        <td><?= $row['penerbit'] ?></td>
                        <td><?= $row['tahun_terbit'] ?></td>
                        <td>
                            <a href="FormBuku.php?id=<?= $row['id_buku'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="Buku.php?delete=<?= $row['id_buku'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-outline-primary mb-3">&#8592; Kembali Ke Beranda</a>
        </div>
    </div>
</div>
</body>
</html>