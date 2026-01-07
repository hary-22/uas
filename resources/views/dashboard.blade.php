<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/script2.js') }}"></script>
</head>
<body>
    <!-- Side Bar -->
    <div class="d-flex">
        <div id="sidebar" class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
          <div class="text-center mb-4">
            <h2 class="fw-bold" style="color:orange;">Enka</strong> Tour</h2>
            <h5 class="mb-0">ENKA TOUR MANAGEMENT</h5>
          </div>
      
          <small class="text-secondary text-uppercase">Menu</small>
          <ul class="nav flex-column mb-4">
            <li class="nav-item">
              <a class="nav-link text-white" href="#home"><i class="bi bi-house-door me-2"></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#destinasi"><i class="bi bi-geo-alt me-2"></i>Destinasi Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#paket"><i class="bi bi-suitcase me-2"></i>Paket Tour</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#validasi"><i class="bi bi-check2-square me-2"></i>Validasi Tour</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#dokumentasi"><i class="bi bi-collection me-2"></i>Dokumentasi</a>
          </ul>
      
          <small class="text-secondary text-uppercase">Konfigurasi</small>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="#akun"><i class="bi bi-gear me-2"></i>Akun</a>
            </li>
          </ul>
        </div>
      
        <div class="flex-grow-1">
            <nav class="navbar navbar-light bg-light">
              <button id="toggleBtn" class="btn">
                <i class="bi bi-list" style="font-size: 25px"></i>
              </button>
            </nav>
            <!-- Home -->
            <div id="home" class="container mt-3">
              <h1>Selamat Datang!</h1>
              <p>Ini adalah isi dari halaman utama.</p>
            </div>
          
            <!-- destinasi Wisata -->
            <div id="destinasi" class="container mt-3">
              <h1>Destinasi wisata</h1>
            </div>
            <!-- Paket Tour -->
            <div id="paket" class="container mt-3">
              <h1>Paket Tour</h1>
            </div>
            <!-- Validasi Tour -->
            <div id="validasi" class="container mt-3">
              <h1>Validasi Tour</h1>
            </div>
            <!-- Dokumentasi -->
            <div id="dokumentasi" class="container mt-3">
              <h1>Dokumentasi</h1>
            </div>
            <!-- Akun -->
            <div id="akun" class="container mt-3">
              <h1>Akun</h1>
          </div>
      </div>
</body>
</html>