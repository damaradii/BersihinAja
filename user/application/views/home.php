<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BersihinAja</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .main-heading {
      font-size: 48px;
      font-weight: 700;
      color: #333;
    }
    .description {
      font-size: 16px;
      color: #6c757d;
    }
    .info-box {
      display: flex;
      align-items: center;
      gap: 15px;
    }
    .info-box .icon {
      background-color: #dff4dc;
      width: 80px;
      height: 80px;
      border-radius: 8px;
    }
    .info-box .text {
      font-size: 16px;
      font-weight: 500;
      color: #333;
    }
    .info-box .text span {
      display: block;
      font-size: 12px;
      color: #6c757d;
    }
    .main-image {
      width: 100%;
      height: 250px;
      background-color: #dff4dc;
      border-radius: 16px;
    }
    .section-title {
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 20px;
    }
    .section-subtitle {
      font-size: 16px;
      color: #6c757d;
      margin-bottom: 40px;
    }
    .stat-box {
      background-color: #dff4dc;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      font-size: 48px;
      font-weight: 700;
      color: #333;
    }
    .icon-box {
      background-color: #dff4dc;
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    .card-service {
      border: none;
      border-radius: 8px;
      background-color: #dff4dc;
      text-align: center;
      padding: 20px;
    }
    .card-service h5 {
      font-size: 18px;
      font-weight: 700;
      margin-top: 10px;
    }
    .card-service p {
      font-size: 14px;
      color: #6c757d;
    }
    .btn-view-all {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 20px;
      padding: 10px 20px;
      font-size: 14px;
      font-weight: 500;
    }
    .btn-view-all:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container py-5">

    <nav class="font-semibold text-gray-400 text-sm uppercase gap-4 mb-4">
      <span>/ BersihinAja ~ Cleaning Service</span>
    </nav>

  <div class="flex flex-row items-center">
    <div class="d-flex align-items-start mt-4">
      <div class="info-box me-4">
        <div class="icon"></div>
        <div class="text">
          126+<span>Professional Tools</span>
        </div>
      </div>
      <h1 class=" font-bold text-8xl flex justify-end items-end">Ruangan Bersih Berkilau</h1>
    </div>
  
  </div>

    <!-- Main Image -->
    <div class="main-image mt-4"></div>
  </div>

  <!-- Section: About Us -->
  <div class="container py-5">
    <section class="mb-5">
      <h2 class="section-title">Bersih Sempurna Menuju Perfeksionis</h2>
      <p class="section-subtitle">Kami menyediakan layanan kebersihan profesional dengan jadwal fleksibel dan perhatian terhadap detail.</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="stat-box">99%<br><span style="font-size: 18px; font-weight: 500;">Satisfied Clients</span></div>
        </div>
        <div class="col-md-4">
          <div class="stat-box">50+<br><span style="font-size: 18px; font-weight: 500;">Professional Teams</span></div>
        </div>
        <div class="col-md-4">
          <div class="stat-box">200+<br><span style="font-size: 18px; font-weight: 500;">Tools Used</span></div>
        </div>
      </div>
    </section>

    <!-- Section: Why Choose Us -->
    <section class="mb-5">
      <h2 class="section-title">Pilih Bersih, Pilih BersihinAja</h2>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="stat-box">341+<br><span style="font-size: 18px; font-weight: 500;">Projects Finished</span></div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-6">
              <div class="icon-box"><i class="bi bi-check"></i></div>
              <p>Crew Pembersih yang Andal</p>
            </div>
            <div class="col-6">
              <div class="icon-box"><i class="bi bi-clock"></i></div>
              <p>On-Time Services</p>
            </div>
            <div class="col-6">
              <div class="icon-box"><i class="bi bi-flex"></i></div>
              <p>Paket yang Fleksibel</p>
            </div>
            <div class="col-6">
              <div class="icon-box"><i class="bi bi-wallet2"></i></div>
              <p>Harga Transparan</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section>
      <div class="flex justify-between items-center mb-6">
        <h2 class="section-title text-lg font-bold">Pilih Paket Mu!</h2>
        <a href="all_service" class="bg-green-200 text-green-800 font-semibold px-6 py-2 rounded-full hover:bg-green-300 transition duration-300">
          View All
        </a>
      </div>
      <div class="row g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="bg-green-100 p-4 rounded-lg shadow hover:shadow-lg transition duration-300">
            <div class="flex justify-between items-center">
              <span class="bg-green-300 text-sm text-green-800 font-bold px-2 py-1 rounded-full">Discount 50%</span>
              <button class="bg-white w-8 h-8 flex justify-center items-center rounded-full shadow">
                <i class="bi bi-arrow-right"></i>
              </button>
            </div>
            <div class="mt-4 text-center">
              <h5 class="text-lg font-bold text-gray-800">Home Cleaning</h5>
              <p class="text-sm text-gray-500">Telus aliquam faucibus imperdiet eget interdum risus diam.</p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="bg-green-100 p-4 rounded-lg shadow hover:shadow-lg transition duration-300">
            <div class="flex justify-between items-center">
              <span class="bg-green-300 text-sm text-green-800 font-bold px-2 py-1 rounded-full">Discount 50%</span>
              <button class="bg-white w-8 h-8 flex justify-center items-center rounded-full shadow">
                <i class="bi bi-arrow-right"></i>
              </button>
            </div>
            <div class="mt-4 text-center">
              <h5 class="text-lg font-bold text-gray-800">Office Cleaning</h5>
              <p class="text-sm text-gray-500">Telus aliquam faucibus imperdiet eget interdum risus diam.</p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="bg-green-100 p-4 rounded-lg shadow hover:shadow-lg transition duration-300">
            <div class="flex justify-between items-center">
              <span class="bg-green-300 text-sm text-green-800 font-bold px-2 py-1 rounded-full">Discount 50%</span>
              <button class="bg-white w-8 h-8 flex justify-center items-center rounded-full shadow">
                <i class="bi bi-arrow-right"></i>
              </button>
            </div>
            <div class="mt-4 text-center">
              <h5 class="text-lg font-bold text-gray-800">Kitchen Cleaning</h5>
              <p class="text-sm text-gray-500">Telus aliquam faucibus imperdiet eget interdum risus diam.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
