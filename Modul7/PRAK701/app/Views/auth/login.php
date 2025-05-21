<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #b3e5fc;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      padding: 30px;
      border-radius: 6px;
      width: 350px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 25px;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    button {
      width: 100%;
      padding: 12px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
    }
    .error {
      background: #ffe5e5;
      color: #d8000c;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 6px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="error"><?= session()->getFlashdata('error') ?></div>
    <?php endif ?>

    <form method="post" action="/login/proses">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Masuk</button>
    </form>
  </div>
</body>
</html>