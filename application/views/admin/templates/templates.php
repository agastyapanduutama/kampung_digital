<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shortcut icon" href="http://lipi.go.id/public/themes/web/assets/img/favicon/favicon.ico" type="image/x-icon" />
  <meta name="baseUrl" content="<?= base_url() ?>">
  <meta name="menu" content="<?= (isset($menu)) ? $menu : null ?>">
  <meta name="token" content="<?= $this->session->userdata('token') ?>">
  <meta name="upk" content="<?= $this->session->userdata('upk') ?>">

  <title>Kelola Penduduk </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/fontawasome/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/fontawasome/css/all.css">

  <!-- CSS Libraries -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/admin/node_modules/prismjs/themes/prism.css"> -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/datatables.min.css" />


  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/modules/iziToast.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/components.css">

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">


          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?= base_url() ?>assets/admin/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('nama_user'); ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">


              <a href="<?= base_url('admin/password')?>" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Ganti Password
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" id="btnKeluar" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Keluar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">KELOLA PENDUDUK</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RK</a>
          </div>
          <ul class="sidebar-menu">

            <li class="menu-header">Menu</li>

            <li class="nav-item dropdown">
              <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
                <i class="fas fa-columns"></i> <span>Dashboard</span></a>
            </li>


            <?php if ($this->session->level != '4') : ?>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i> <span>Master</span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url('admin/agama') ?>">Data Agama</a></li>
                  <li><a href="<?= base_url('admin/pekerjaan') ?>">Data Pekerjaan</a></li>
                  <li><a href="<?= base_url('admin/pendidikan') ?>">Data Pendidikan</a></li>
                  <li><a href="<?= base_url('admin/pernikahan') ?>">Data Pernikahan</a></li>
                  <li><a href="<?= base_url('admin/rt') ?>">Data RT </a></li>
                  <li><a href="<?= base_url('admin/user') ?>">Data User </a></li>
                </ul>
              </li>
            <?php endif ?>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Penduduk</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?= base_url('admin/penduduk') ?>">Data Penduduk</a></li>
                <li><a href="<?= base_url('admin/penduduk/tambah') ?>">Tambah Penduduk</a></li>
              </ul>
            </li>




        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $title ?></h1>
          </div>

          <?php require 'content.php'; ?>

        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; <?= date('Y') ?> <div class="bullet"></div> Kelola Penduduk</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->

  <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url() ?>assets/js/moment.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/assets/js/stisla.js"></script>



  <!-- DataTables  & Plugins -->
  <script type="text/javascript" src="<?= base_url() ?>assets/js/datatables.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>




  <!-- <script src="<?= base_url() ?>assets/admin/node_modules/prismjs/prism.js"></script> -->
  <!-- JS Libraies -->

  <!-- Sweet Alert -->
  <script src="<?= base_url() ?>assets/modules/iziToast.min.js"></script>
  <script src="<?= base_url() ?>assets/modules/sweetalert.min.js"></script>


  <!-- Template JS File -->
  <script src="<?= base_url() ?>assets/admin/assets/js/scripts.js"></script>
  <script src="<?= base_url() ?>assets/admin/assets/js/custom.js"></script>
  <script src="<?= base_url() ?>assets/admin/assets/js/page/bootstrap-modal.js"></script>
  <script src="<?= base_url() ?>assets/js/page/admin.js"></script>
  <script src="<?= base_url() ?>assets/js/page/<?= (isset($script)) ? $script : "" ?>.js"></script>

  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>


</body>

</html>