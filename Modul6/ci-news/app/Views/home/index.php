<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('<?= base_url('assets/img/bg-bunga.jpg') ?>') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', sans-serif;
            color: #1e3a8a;
        }
        .hero {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            padding: 60px 20px;
            margin-top: 50px;
        }
        .btn-custom {
            background-color: #93c5fd;
            color: white;
        }
        .btn-custom:hover {
            background-color: #60a5fa;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
    <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>">Beranda</a>
    <a class="nav-link text-muted" href="<?= base_url('/profil') ?>">Profil</a>
</nav>

<div class="container hero text-center">
    <h1 class="display-5 fw-bold">Hai, Selamat Datang 👋</h1>
    <p>Perkenalkan Aku <strong><?= $mahasiswa['nama'] ?></strong> dengan NIM <strong><?= $mahasiswa['nim'] ?></strong></p>
    <p>yang mau membagikan sedikit informasi mengenai diriku</p>
    <p class="lead">💃💃💃</p>
    <a href="<?= base_url('/profil') ?>" class="btn btn-custom mt-4 px-4 py-2">Lihat Profilku</a>
</div>

</body>
</html>