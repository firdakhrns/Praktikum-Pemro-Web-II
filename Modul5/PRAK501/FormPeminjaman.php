<?php
require 'Model.php';

$id = '';
$id_member = '';
$id_buku = '';
$tgl_pinjam = '';
$tgl_kembali = '';

$members = getAllMembers();
$books = getAllBooks();

if (isset($_GET['id'])) {
    $data = getPeminjamanById($_GET['id']);
    $id = $data['id_peminjaman'];
    $id_member = $data['id_member'];
    $id_buku = $data['id_buku'];
    $tgl_pinjam = $data['tgl_pinjam'];
    $tgl_kembali = $data['tgl_kembali'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['id'] == '') {
        insertPeminjaman($_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    } else {
        updatePeminjaman($_POST['id'], $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    header("Location: Peminjaman.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e6f0ff; }
        .navbar { background-color: #4d94ff; }
    </style>
</head>
<body>
<nav class="navbar navbar-dark mb-4">
    <div class="container-fluid">
        <span class="navbar-brand">Perpustakaan - Form Peminjaman</span>
    </div>
</nav>

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">Formulir Peminjaman</div>
        <div class="card-body">
            <form method="post">
                <input type="hidden" name="id" value="<?= $id ?>">

                <div class="mb-3">
                    <label class="form-label">Member</label>
                    <select name="id_member" class="form-select" required>
                        <option value="">Pilih Member</option>
                        <?php while ($m = $members->fetch_assoc()) { ?>
                            <option value="<?= $m['id_member'] ?>" <?= $m['id_member'] == $id_member ? 'selected' : '' ?>>
                                <?= $m['nama_member'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Buku</label>
                    <select name="id_buku" class="form-select" required>
                        <option value="">Pilih Buku</option>
                        <?php
                        $book_ids = [];
                        $books = getAllBooks(); // ulangi supaya tidak kehabisan result set
                        while ($b = $books->fetch_assoc()) {
                            $book_ids[] = $b['id_buku'];
                            $selected = ($b['id_buku'] == $id_buku) ? 'selected' : '';
                            echo "<option value='{$b['id_buku']}' $selected>{$b['judul_buku']}</option>";
                        }
                        if ($id_buku && !in_array($id_buku, $book_ids)) {
                            echo "<option value='$id_buku' selected>Buku sudah dihapus (ID: $id_buku)</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="form-control" value="<?= $tgl_pinjam ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control" value="<?= $tgl_kembali ?>" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="Peminjaman.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>