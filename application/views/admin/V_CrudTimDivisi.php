<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HEJOTEKNO - PT ATI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('img/logoweb.png') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
</head>

<body>

    <!-- Navbar & Hero Start -->
    <div class="container-fluid bg-primary position-relative p-2 py-5 mb-5">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="<?= base_url('img/logo.png') ?>" alt="Logo" style="max-height: 30px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?php echo site_url('C_Admin/admin_dashboard'); ?>" class="nav-item nav-link hover">Admin</a>
                    <a href="<?php echo site_url('C_Admin/cruduser'); ?>" class="nav-item nav-link">User</a>
                    <a href="<?php echo site_url('C_Admin/crudproduk'); ?>" class="nav-item nav-link">Produk</a>
                    <a href="<?php echo site_url('C_Admin/crudtim'); ?>" class="nav-item nav-link">Tim</a>
                    <a href="<?php echo site_url('C_Admin/crudtimdivisi'); ?>" class="nav-item nav-link">Tim Divisi</a>
                    <a href="<?php echo site_url('C_Admin/crudcontact'); ?>" class="nav-item nav-link">Contact</a>
                    <a href="<?php echo site_url('C_Admin/crudinvoice'); ?>" class="nav-item nav-link">Invoice</a>
                </div>
                <a href="<?php echo site_url('C_Admin/signoutadmin'); ?>" class="btn btn-light rounded-pill py-2 px-4">Sign Out</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Tabel Crud Admin Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tim Divisi Table</h6>
                    <div class="d-flex justify-content-between mb-3">
                        <a href="<?= site_url('C_Admin/createtimdivisi'); ?>" class="btn rounded-3 btn-primary">
                            <i class="fas fa-plus"></i> Add Tim Divisi
                        </a>
                        <form class="d-flex" action="<?= site_url('C_Admin/searchtimdivisi'); ?>" method="get">
                            <input class="form-control me-2" type="search" name="query" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tim Divisi</th>
                                    <th>Jabatan Tim Divisi</th>
                                    <th>Foto Tim Divisi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($timdivisi as $tdivisi) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $tdivisi->nama_timdivisi; ?></td>
                                        <td><?php echo $tdivisi->jabatan_timdivisi; ?></td>
                                        <td><img src="<?= base_url('img/' . $tdivisi->foto_timdivisi); ?>" alt="<?php echo $tdivisi->nama_timdivisi; ?>" style="width: 100px; height: auto;"></td>                                        <td>
                                            <a href="<?= site_url('C_Admin/edittimdivisi/' . $tdivisi->id_timdivisi); ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="<?= site_url('C_Admin/deletetimdivisi/' . $tdivisi->id_timdivisi); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabel Crud Admin End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/wow/wow.min.js'); ?>"></script>
    <script src="<?= base_url('lib/easing/easing.min.js'); ?>"></script>
    <script src="<?= base_url('lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('js/main.js'); ?>"></script>
</body>

</html>
