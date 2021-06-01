
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url()?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/modules/select2/dist/css/select2.min.css">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url()?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"> <?= $this->session->username;?> </div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="<?= site_url('profile/changepassword')?>" class="dropdown-item has-icon" id="changepassword">
                <i class="fas fa-cog"></i> Changepassword
              </a>
              <a href="<?= site_url('auth/logout')?>" class="dropdown-item dropdown-footer tombol-logout has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Wifiger</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Wf</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Navigation</li>
              <li class="nav-item <?= $title == 'Dashboard'  ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>
            
            <li class="dropdown <?= $title == 'Pelanggan' | $title == 'Deposit' ? 'active' : '' ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i> <span>Master</span></a>
                <ul class="dropdown-menu">
                        <li class="<?= $title == 'Pelanggan'  ? 'active' : '' ?>"><a href="<?= base_url('pelanggan') ?>">Pelanggan</a></li>
                        <li class="<?= $title == 'Deposit'  ? 'active' : '' ?>"><a href="<?= base_url('deposit')?>">Deposit</a></li>
                    </ul>
            </li>

            <li class="dropdown <?= $title == 'Pembayaran' | $title == 'Tagihan'  ? 'active' : '' ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exchange-alt"></i><span>Transaksi</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?= $title == 'Income'  ? 'active' : '' ?>"><a href="">Pembayaran</a></li>
                        <li class="<?= $title == 'Tagihan'  ? 'active' : '' ?>"><a href="<?= base_url('tagihan')?>">Tagihan</a></li>
                    </ul>
            </li>

            <li class="nav-item <?= $title == 'Pemasangan' | $title == 'Add Pemasangan' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('pemasangan'); ?>">
                  <i class="fas fa-shopping-cart"></i>
                    <span>Pemasangan</span></a>
            </li> 
            <li class="nav-item <?= $title == 'User'  ? 'active' : '' ?>">
                <a class="nav-link" href="<?= site_url('user') ?>">
                    <i class="fas fa-user"></i>
                    <span>Management Pengguna</span></a>
            </li>
        </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
         <?= $contents ?>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; <?= date('Y')?> <div class="bullet"></div> Development By Wifiger</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url()?>assets/modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/modules/popper.js/dist/umd/popper.min.js" ></script>
  <script src="<?= base_url()?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?= base_url()?>assets/modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url()?>assets/modules/moment.min.js"></script>
  <script src="<?= base_url()?>assets/modules/swal/sweetalert2.all.min.js"></script>
  <script src="<?= base_url()?>assets/modules/select2/dist/js/select2.min.js"></script>
  <script src="<?= base_url()?>assets/js/myscript.js"></script>
  <script src="<?= base_url()?>assets/js/stisla.js"></script>
  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url()?>assets/js/scripts.js"></script>
  <script src="<?= base_url()?>assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script>
        $(function() {

            $("#dataTable").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

        var rupiah = $("#rupiah1");
        
        rupiah.keyup((e) => {
          rupiah.val(formatRupiah(e.target.value, "Rp. "));
        })

        function formatRupiah(angka, prefix) {
          var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

          if (ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
          }

          rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
          return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
        }

    </script>

</body>
</html>
