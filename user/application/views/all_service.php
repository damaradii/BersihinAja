<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Services</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .service-card {
      background-color: #dff4dc;
      padding: 20px;
      border-radius: 12px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }
    .service-card .icon {
      background-color: #baf0b2;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 15px;
    }
    .service-card .icon i {
      font-size: 24px;
      color: #4caf50;
    }
    .service-card h5 {
      font-size: 18px;
      font-weight: 700;
      color: #333;
    }
    .service-card p {
      font-size: 14px;
      color: #6c757d;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <!-- Header -->
    <div class="mb-4">
      <h1 class="text-center font-bold text-2xl mb-2">All Our Services</h1>
      <p class="text-center text-gray-600">Explore our variety of professional cleaning services.</p>
    </div>

    <!-- Service Cards -->
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-house"></i>
          </div>
          <h5>Home Cleaning</h5>
          <p>Get your home cleaned by our professional cleaning team.</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-building"></i>
          </div>
          <h5>Office Cleaning</h5>
          <p>Maintain your office environment clean and professional.</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-cup-straw"></i>
          </div>
          <h5>Kitchen Cleaning</h5>
          <p>Ensure a spotless and hygienic kitchen for your family.</p>
        </div>
      </div>
      <!-- Tambahkan card lainnya -->
      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-paint-bucket"></i>
          </div>
          <h5>Wall Cleaning</h5>
          <p>Restore the beauty of your walls with our expert cleaning.</p>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-sofa"></i>
          </div>
          <h5>Furniture Cleaning</h5>
          <p>Preserve the quality of your furniture with deep cleaning.</p>
        </div>
      </div>
      <!-- Card 6 -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-tree"></i>
          </div>
          <h5>Garden Cleaning</h5>
          <p>Keep your garden tidy and inviting for your family and guests.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>