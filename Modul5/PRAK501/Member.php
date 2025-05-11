<?php
require 'Model.php';

if (isset($_GET['delete'])) {
    deleteMember($_GET['delete']);
    header("Location: Member.php");
}

$members = getAllMembers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e6f0ff; }
        .navbar { background-color: #4d94ff; }
    </style>
</head>
<body>
<nav class="navbar navbar-dark mb-4">
    <div class="container-fluid">
        <span class="navbar-brand">Perpustakaan - Daftar Member</span>
    </div>
</nav>

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">Daftar Member</div>
        <div class="card-body">
            <a href="FormMember.php" class="btn btn-success mb-3">+ Tambah Member</a>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th><th>Nama</th><th>Nomor</th><th>Alamat</th><th>Tgl Mendaftar</th><th>Tgl Terakhir Bayar</th><th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $members->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $row['id_member'] ?></td>
                            <td><?= $row['nama_member'] ?></td>
                            <td><?= $row['nomor_member'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= $row['tgl_mendaftar'] ?></td>
                            <td><?= $row['tgl_terakhir_bayar'] ?></td>
                            <td>
                                <a href="FormMember.php?id=<?= $row['id_member'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="Member.php?delete=<?= $row['id_member'] ?>" onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</a>
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