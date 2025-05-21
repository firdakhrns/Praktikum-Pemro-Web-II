<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Buku</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #b3e5fc, #e0f7fa);
      padding: 30px;
    }
    h2 {
      color: #333;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: white;
      border-radius: 8px;
      overflow: hidden;
    }
    th, td {
      padding: 14px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }
    th {
      background: #007BFF;
      color: white;
    }
    a, button {
      text-decoration: none;
      padding: 8px 12px;
      border-radius: 4px;
      margin-right: 5px;
    }
    a.btn-add {
      background: #28a745;
      color: white;
    }
    a.btn-edit {
      background: #ffc107;
      color: black;
    }
    form button {
      background: #dc3545;
      color: white;
      border: none;
      cursor: pointer;
    }
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
  </style>
</head>
<body>
  <div class="topbar">
    <h2>Daftar Buku</h2>
    <div>
      <a class="btn-add" href="/buku/create">+ Tambah Buku</a>
      <a class="btn-edit" href="/logout">Logout</a>
    </div>
  </div>

  <table>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th></th>
    </tr>
    <?php $i = 1; foreach ($buku as $b): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= esc($b['judul']) ?></td>
      <td><?= esc($b['penulis']) ?></td>
      <td><?= esc($b['penerbit']) ?></td>
      <td><?= esc($b['tahun_terbit']) ?></td>
      <td>
        <a class="btn-edit" href="/buku/edit/<?= $b['id'] ?>">Edit</a>
        <form method="post" action="/buku/delete/<?= $b['id'] ?>" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus?')">
          <?= csrf_field() ?>
          <button type="submit">Hapus</button>
        </form>
      </td>
    </tr>
    <?php endforeach ?>
  </table>
</body>
</html>