<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e6f0ff; }
        .navbar { background-color: #4d94ff; }
        .card:hover { transform: scale(1.02); transition: 0.3s; }
    </style>
</head>
<body>
<nav class="navbar navbar-dark mb-4">
    <div class="container-fluid">
        <span class="navbar-brand">Dashboard Perpustakaan</span>
    </div>
</nav>

<div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Selamat Datang!</h1>
        <p class="text-muted">Silakan pilih menu di bawah ini untuk mulai mengelola data</p>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <a href="Member.php" class="text-decoration-none text-dark">
                <div class="card shadow text-center p-4">
                    <h4>Data Member</h4>
                    <p>Kelola informasi member</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="Buku.php" class="text-decoration-none text-dark">
                <div class="card shadow text-center p-4">
                    <h4>Data Buku</h4>
                    <p>Kelola koleksi buku</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="Peminjaman.php" class="text-decoration-none text-dark">
                <div class="card shadow text-center p-4">
                    <h4>Peminjaman</h4>
                    <p>Kelola transaksi peminjaman</p>
                </div>
            </a>
        </div>
    </div>
</div>
</body>
</html>