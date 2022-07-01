<?php 

include '../api/handlers/connection.php';

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

error_reporting(0);
if (isset($_POST['submit'])) {
$nama_menu = $_POST['nama_menu'];
$harga = $_POST['harga'];
$image = $_POST['image'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST["kategori"];
$stock = $_POST["stock"];
			$sql = "INSERT INTO menu (nama_menu, image, kategori, deskripsi, harga, stock)
					VALUES ('$nama_menu','$image','$kategori','$deskripsi','$harga','$stock')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
        echo "<script>alert('Tambah Produk Behasil')</script>";
        $nama_menu = "";
        $harga = "";
		$image = "";
		$deskripsi = "";
        $kategori = "";
        $stock = "";
      
      } else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
    }

?>
<!--doctype html-->
<html>
<head>
    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<link rel="stylesheet" type="text/css" href="../css/ewq.css"/>
<!--Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!---------------------------------------------->
<script src="https://kit.fontawesome.com/73ea2339d2.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<link rel="shortcut icon" href="img/favicon/favicon.png"/>
<title>Rencana | Dashboard</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Mulish:wght@200;400&display=swap" rel="stylesheet">
<!--style----->

	
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient sidebar sidebar-danger accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">OBURGER <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard-admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class="fas fa-users"></i>
                    <span>Food & Drinks</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                <i class="fas fa-users"></i>
                    <span>Orders</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                <i class="fas fa-users"></i>
                    <span>User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="card" style="width: 20rem;">
        <img src="img/illustrasi/4309857.jpg" class="card-img-top" alt="img/illustrasi/4309857.jpg">
        <div class="card-body">
          <h5 class="card-title">Tambah Product</h5>
          <form action="" method="POST" class="form_list">
          <div class="mb-3">
                    <i class="fas fa-book"></i>
                    <label for="exampleInputPassword1" class="form-label">Nama Product</label>
                    <input type="text" class="form-control" id="nama_menu" name="nama_menu"  value="<?php echo $nama_menu; ?>" >
                </div>
                <div class="mb-3">
                    <i class="fas fa-book"></i>
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga"  value="<?php echo $harga; ?>" >
                </div>
                <div class="mb-3">
                    <i class="fas fa-book"></i>
                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"  value="<?php echo $deskripsi; ?>" >
                </div>
                <div class="mb-3">
                    <i class="fas fa-book"></i>
                    <label for="exampleInputPassword1" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image"  value="<?php echo $image; ?>" >
                </div>
                <div class="mb-5">
                    <i class="fas fa-align-center"></i>
                    <label  name ="kategori" class="form-label"> Kategori List</label>
                    <div class="form-check">
                            <input class="form-check-input" type="radio" id="kategori" name="kategori"  value="Makanan" >
                            <label class="form-check-label" for="flexRadioDefault1">
                              Makanan
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" id="kategori" name="kategori"  value="Minuman" >
                            <label class="form-check-label" for="flexRadioDefault2">
                              Minuman
                            </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" id="kategori" name="kategori" value="burger" >
                        <label class="form-check-label" for="flexRadioDefault2">
                          Burger
                        </label>
                    </div>
                         <div class="form-check">
                        <input class="form-check-input" type="radio" id="kategori" name="kategori" value="others" >
                        <label class="form-check-label" for="flexRadioDefault2">
                          Others
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <i class="fas fa-book"></i>
                    <label for="exampleInputPassword1" class="form-label">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock"  value="<?php echo $stock; ?>" >
                </div>
            <input class="btn btn-danger" type="submit" value="Buat Menu Baru" name="submit">
        </div>
      </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="js/admin/vendor/jquery/jquery.min.js"></script>
    <script src="js/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/admin/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="js/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/admin/demo/chart-area-demo.js"></script>
    <script src="js/admin/demo/chart-pie-demo.js"></script>

</body>

</html>