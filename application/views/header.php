<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Member Marketplace</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <style>
    .custom-navbar {
      background-color: #d3d3d3;
    }
    .navbar-nav .nav-item a {
      color: #000;
      text-decoration: none;
      font-size: 16px;
    }
    .navbar-nav .nav-item a:hover {
      color: #007bff;
    }
    .dropdown-menu a {
      color: #000;
      text-decoration: none;
    }
    .dropdown-menu a:hover {
      color: #007bff;
    }
    .navbar-brand-logo {
      width: 30px;
      height: 30px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container">
      <!-- Brand Logo -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="/BersihinAja/assets/wind.svg" alt="Logo" class="navbar-brand-logo me-2">
        <h2 class="m-0" style="font-size: 18px;">BersihinAja</h2>
      </a>

      <!-- Toggler Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Content -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <!-- Centered Menu Links -->
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kategori</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Keranjang</a></li>
        </ul>

        <!-- Right Side Links -->
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
