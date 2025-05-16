<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #e0f2fe;
            font-family: 'Segoe UI', sans-serif;
        }
        .card {
            background: white;
            border: none;
            border-radius: 20px;
            padding: 40px 30px 30px;
        }
        .profile-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            margin-bottom: 20px; 
        }
        .badge-skill {
            background-color: #60a5fa;
        }
        .btn-back {
            background-color: #93c5fd;
            color: white;
        }
        .btn-back:hover {
            background-color: #60a5fa;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
    <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>">Beranda</a>
    <a class="nav-link text-muted" href="<?= base_url('/profil') ?>">Profil</a>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow text-center">
                <div class="d-flex align-items-center flex-column flex-md-row text-md-start text-center mb-4">
                    <img src="<?= base_url('assets/img/' . $profil['gambar']) ?>" alt="Foto Profil" class="profile-img me-md-4 mb-3 mb-md-0">
                    <div>
                        <h3 class="fw-bold mb-1"><?= $profil['nama'] ?></h3>
                        <p class="text-muted"><?= $profil['prodi'] ?> | <?= $profil['nim'] ?></p>
                    </div>
                </div>
                <hr>
                <h5>Hobby</h5>
                <p><?= $profil['hobi'] ?></p>

                <h5>Skill</h5>
                <div class="d-flex justify-content-center flex-wrap gap-2">
                    <?php foreach ($profil['skill'] as $s): ?>
                        <span class="badge badge-skill text-white px-3 py-2"><?= $s ?></span>
                    <?php endforeach; ?>
                </div>

                <h5 class="mt-4">Favorite Dish 🍜</h5>
                <p><?= $profil['makanan_favorit'] ?></p>

                <h5>Drama Watched Recently 🎬</h5>
                <p><?= $profil['film_favorit'] ?></p>

                <h5>Instagram 📸</h5>
                <p><a href="https://instagram.com/<?= ltrim($profil['instagram'], '@') ?>" target="_blank"><?= $profil['instagram'] ?></a></p>

                <p class="fst-italic text-muted mt-4">"<?= $profil['quote'] ?>"</p>

                <a href="<?= base_url('/') ?>" class="btn btn-back mt-4">← Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>