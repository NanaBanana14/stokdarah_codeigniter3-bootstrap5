<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Detail Stok Darah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('assets/img/logo.png'); ?>" type="image/x-icon">

    <!-- browser icon -->
    <link href="img/favicoicon." rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <!-- logo -->
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">
                        <i>
                            <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Pandas" width="70">
                        </i>
                        Pandas
                    </h3>
                </a>

                <!-- <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i>< img src="assets/img/blood stock.png" alt="">Pandas</i></h3>
                </a> -->
                <!-- logo -->

                <div class="navbar-nav w-100">

                    <a href="<?php echo site_url('Stok') ?>" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Stok Darah</a>
                    <a href="<?php echo site_url('Informasi') ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Detail Darah</a>
                    <a href="<?php echo site_url('Detail') ?>" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Detail Stok Darah</a>
                    <a href="<?php echo site_url('Masuk') ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Data Masuk</a>
                    <a href="<?php echo site_url('Keluar') ?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Data Keluar</a>
                    <a href="<?php echo site_url('Admin') ?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Kelola Admin</a>
                    <a href="<?php echo site_url('Auth/logout') ?>" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Log Out</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class=img src="<?php echo base_url('assets/img/logo.png'); ?>" width="70"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">

                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">


                        </div>
                    </div>
                    <div class="nav-item dropdown">

                    </div>
                    <div class="nav-item dropdown">
                        <a href="<?php echo site_url('Auth/logout') ?>" data-bs-toggle="dropdown">
                            <!-- ganti gambar icon admin nya -->
                            <a href="<?php echo site_url('Auth/logout') ?>"><img class="rounded-circle me-lg-2" src="<?php echo base_url('assets/img/keluar.png'); ?>" alt="" style="width: 40px; height: 40px;">Logout</a>

                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Informasi Detail Darah</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="<?php echo site_url('Detail/create') ?>">
                            <button class="btn btn-outline-success m-2" type="button" name="button" title="untuk menambah data" style="margin-left: auto;">Tambah</button>
                        </a>
                        <a href="<?php echo site_url('Detail/export') ?>">
                            <button class="btn btn-outline-info m-2" type="button" name="button" title="untuk export data" style="margin-right: auto;">Export</button>
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Detail Stok</th>
                                    <th scope="col">Id Stok</th>
                                    <th scope="col">Darah</th>
                                    <th scope="col">Kadaluarsa</th>
                                    <th scope="col">Suhu</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                //$read yang diambil dari control function index
                                foreach ($read->result_array() as $row) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $no ?>
                                        </td>
                                        <td>
                                            <?php echo $row['id_detailstok'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['id_stok'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['darah'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['kadaluarsa'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['suhu'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['keterangan_stok'] ?>
                                        </td>
                                        <td>
                                            <!--memanggil halaman edit atau edit.php-->
                                            <a href="<?php echo site_url('Detail/edit/' . $row['id_detailstok']) ?>" title="tombol utk merubah data">Ubah</a> |
                                            <!--memanggil aksi delete-->
                                            <a href="<?php echo site_url('Detail/delete/' . $row['id_detailstok']) ?>" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['darah']; ?>')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->




            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Pandas2023</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/lib/chart/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>

</html>