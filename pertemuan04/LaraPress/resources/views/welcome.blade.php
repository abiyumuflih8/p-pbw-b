<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard - LaraPress</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f6f8;
      margin: 0;
      padding: 0;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }
    header {
      background-color: #005f73;
      width: 100%;
      padding: 20px 0;
      color: white;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    h1 {
      margin: 0;
      font-weight: 700;
      letter-spacing: 1.2px;
    }
    p {
      margin: 20px 0;
      font-size: 1.2rem;
      text-align: center;
      max-width: 600px;
    }
    nav.main-nav {
      margin: 20px 0;
    }
    nav.main-nav a {
      text-decoration: none;
      color: #0077b6;
      margin: 0 12px;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    nav.main-nav a:hover {
      color: #023e8a;
    }
    .btn-container {
      margin-top: 30px;
      display: flex;
      gap: 15px;
    }
    button {
      background-color: #00b4d8;
      border: none;
      color: white;
      padding: 12px 24px;
      font-size: 1rem;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #0077b6;
    }
  </style>
</head>
<body>

  <header>
    <h1>Selamat Datang di LaraPress</h1>
  </header>

  <p>Ini halaman utama.</p>

  <nav class="main-nav">
    <a href="/tentang-kami">Tentang Kami</a> |
    <a href="/kontak">Kontak</a>
  </nav>

  <div class="btn-container">
    <button onclick="window.location.href='/login'">Login</button>
    <button onclick="window.location.href='/register'">Register</button>
  </div>

</body>
</html>
