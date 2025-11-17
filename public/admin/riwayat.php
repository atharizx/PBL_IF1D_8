<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penerbitan Informasi</title>
  <link href="https://sim.polibatam.ac.id/assets/img_sim/d8f9867f-23a7-4558-974b-d3c03a621fa3.png" rel="icon">
  <link href="../style/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"rel="stylesheet"/>
  <link href="../style/icons/bootstrap-icons.css" rel="stylesheet">
  <script src="../style/sweetalert/sweetalert2.all.min.js"></script>
  <link href="../style/extadmin.css" rel="stylesheet">

</head>

<body class="bg-light d-flex flex-column">
  <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid d-flex justify-content-between align-items-center px-3 px-md-5">

    <!-- Logo + Judul -->
    <div class="d-flex align-items-center">
      <img
        src="https://sim.polibatam.ac.id/assets/img_sim/d8f9867f-23a7-4558-974b-d3c03a621fa3.png"
        alt="Logo"
        width="70"
        class="me-3"
      />
      <h3 class="navbar-brand fw-bold mb-0">Penerbitan Informasi</h3>
    </div>

    <!-- Tombol Sidebar Mobile -->
    <button
      class="menu-btn d-lg-none order-lg-3"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#mobileSidebar"
    >
      ☰
    </button>

    <!-- ISI NAVBAR KANAN-->
    <div class="d-none d-lg-flex align-items-center gap-3 order-lg-2">
      <a href="../admin/penerbitan.php" class="text-white fw-bold" style="text-decoration: none;" id="home">BERANDA</a>
      
      <!-- Dropdown Profil -->
      <div class="dropdown">
        <button class="btn p-0 border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: none;">
          <img src="../assets/Profil-Logo.png" width="50" alt="Profil">
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow text-center">
          <li><p class="mb-1 fw-semibold">Affatha Rizky Sena</p></li>
          <li><hr class="my-1 fs-1">3312501117</li>
          <li><button class="dropdown-item text-danger fw-bold mt-3"><i class="bi bi-box-arrow-left"></i>Keluar</button></li>
        </ul>
      </div>
    </div>

  </div>
</nav>


  <!-- SIDEBAR MOBILE -->
  <div
    class="offcanvas offcanvas-end offcanvas-sidebar"
    tabindex="-1"
    id="mobileSidebar"
  >
    <div class="offcanvas-header">
      <h5 class="offcanvas-title fw-bold">MENU</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
      <div class="list-group mb-3">
        <a
          href="#"
          class="list-group-item list-group-item-action fw-semibold btn btn-light mb-3"
          id="lihatRiwayatMobile"
          data-bs-dismiss="offcanvas"
          >📜 Beranda</a
        >
        <button
          class="list-group-item list-group-item-action text-danger fw-bold btn btn-light"
          data-bs-dismiss="offcanvas">
          <i class="bi bi-box-arrow-left"></i> Keluar
        </button>
      </div>
    </div>
  </div>

    <!-- MAIN CONTENT -->
    <main class="flex-grow-1">
        <div class="container-fluid mt-0 bg-light">
            <div class="row">
                <!-- ISI KONTEN -->
                <div class="mt-5">
                    <h3 class="mb-4 fw-bold text-center">RIWAYAT PENERBITAN</h3>
                    <div class="mb-3">
                        <input type="search" id="searchBar" name="Search" class="w-25 me-2" placeholder="Cari Informasi">
                        <input type="date" id="tanggalFilter" name="tanggal" class="w-25 me-2">
                        <button type="button" id="resetFilter" class="btn btn-warning shadow">Reset</button>
                    </div>
                    <!-- RIWAYAT MAIN -->
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Judul</th>
                                    <th>Isi Informasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tabelInformasi">
                                <!-- Tempat Render Riwayat-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-black bg-opacity-5 text-white py-1 mt-auto">
    <div class="container text-center">
      <p class="mb-0 fs-6">© 2025 Politeknik Negeri Batam</p>
    </div>
  </footer>

  <script src="../style/js/bootstrap.bundle.js"></script>

</body>
</html>
