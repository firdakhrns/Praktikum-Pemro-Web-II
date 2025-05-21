<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Edit Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(to right, #b3e5fc, #e0f7fa);
      min-height: 100vh;
    }
    .form-container {
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      padding: 30px;
      margin-top: 60px;
    }
  </style>
</head>
<body>
  <div class="container mt-5" style="max-width: 600px;">
    <h2 class="mb-4 text-warning">Edit Buku</h2>

    <?php if(session()->getFlashdata('errors')): ?>
      <div class="alert alert-danger">
        <ul>
          <?php foreach(session()->getFlashdata('errors') as $error): ?>
            <li><?= esc($error) ?></li>
          <?php endforeach ?>
        </ul>
      </div>
    <?php endif; ?>

    <form action="/buku/update/<?= $buku['id'] ?>" method="post">
      <?= csrf_field() ?>
      <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" value="<?= esc($buku['judul']) ?>" required />
      </div>
      <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" class="form-control" name="penulis" value="<?= esc($buku['penulis']) ?>" required />
      </div>
      <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="text" class="form-control" name="penerbit" value="<?= esc($buku['penerbit']) ?>" required />
      </div>
      <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
        <input type="number" class="form-control" name="tahun_terbit" min="1901" max="2023" value="<?= esc($buku['tahun_terbit']) ?>" required />
      </div>
      <button type="submit" class="btn btn-warning">Update</button>
      <a href="/buku" class="btn btn-secondary">Batal</a>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>