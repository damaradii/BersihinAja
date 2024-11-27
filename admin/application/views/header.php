<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin BersihinAja</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>


  <style>
    body {
      background-color: #fbfbfb;
    }

    main {
      margin-top: 60px;
      margin-left: 60px;
      transition: margin-left 0.3s ease-in-out;
    }

    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      width: 240px;
      background-color: #fff;
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
      z-index: 600;
      transition: transform 0.3s ease-in-out;
      transform: translateX(-240px); /* Awal tersembunyi */
    }

    .sidebar.show {
      transform: translateX(0); /* Ditampilkan */
    }

    .sidebar.collapsed {
      transform: translateX(-240px); /* Tersembunyi */
    }

    .sidebar .active {
      border-radius: 5px;
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: 0.5rem;
      overflow-x: hidden;
      overflow-y: auto;
    }

    @media (min-width: 992px) {
      .sidebar {
        transform: translateX(0); /* Selalu terlihat pada layar lebar */
      }

      .sidebar.collapsed {
        transform: translateX(0); /* Abaikan collapsed pada layar lebar */
      }

      main {
        margin-left: 240px; /* Konten utama bergeser sesuai lebar sidebar */
      }

      .sidebar.show ~ main {
        margin-left: 240px;
      }
    }

    @media (max-width: 991.98px) {
      .sidebar {
        transform: translateX(-100%); /* Tersembunyi pada layar kecil */
      }

      .sidebar.show {
        transform: translateX(0); /* Ditampilkan pada layar kecil */
      }

      main {
        margin-left: 0; /* Konten tidak bergeser saat sidebar tersembunyi */
      }
    }
  </style>

</head>

<body>

  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">

        <a href="<?php echo base_url("home") ?>" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Home</span>
        </a>

        <a href="<?php echo base_url("artikel") ?>" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Artikel</span>
        </a>

        <a href="<?php echo base_url("slider") ?>" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-lock fa-fw me-3"></i><span>Slider</span>
        </a>

        <a href="<?php echo base_url("kategori") ?>" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-line fa-fw me-3"></i><span>Kategori</span>
        </a>

        <a href="<?php echo base_url("produk") ?>" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>Produk</span>
        </a>

        <a href="<?php echo base_url("member") ?>" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-chart-bar fa-fw me-3">
          </i><span>Member</span>
        </a>

        <a href="<?php echo base_url("transaksi") ?>" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-globe fa-fw me-3">
          </i><span>Transaksi</span>
        </a>

      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
    
      <a class="navbar-brand px-4" href="#">
          <span class="text-2xl font-bold text-gray-800 flex items-center">
            <img 
            src="https://cdn.discordapp.com/attachments/962882027093364826/1311305244285599816/wind.svg?ex=67485fad&is=67470e2d&hm=87b066648a3b4132893b9c95f6a1821225b3685e654603a3dc4cbea7cfb18212&"
            alt="logo" 
            class="h-6 mr-2"
            height="25"
            alt=""
            loading="lazy">
            BersihinAja
          </span>
      </a>
      <!-- Search form -->
      <form class="d-none d-md-flex input-group w-auto my-auto">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder='Search (ctrl + "/" to focus)'
          style="min-width: 225px" />
        <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
      </form>

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">

        <!-- Icon -->
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <i class="fab fa-github"></i>
          </a>
        </li>


        <!-- Avatar -->
        <li class="nav-item">
                <a href="<?php echo base_url("akun") ?>" class="nav-link">
                    <?php echo $this->session->userdata("nama") ?>       
                </a>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
      </nav>
    <!--Main layout-->
    <main style="margin-top: 58px">
      <div class="container pt-4">

      </div>
    </main>


  </body>

</html>