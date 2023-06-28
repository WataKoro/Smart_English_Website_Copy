<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Smart English</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/logo.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" type="text/css" href="/css/admin/styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/admin/custom.css" media="all" />

    <!-- js barchart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

</head>
<!-- dashboard, statistik, pengaturan -->

<body>
    <div class="d-flex border-0" id="wrapper">
        <!-- Sidebar-->
        <div class="warnabar" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <img src="/assets/logo.png" alt="" style="width: 50px;" class="mx-1">
                Smart English
            </div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action warnabar" href="<?php echo base_url('/admin/dashboard') ?>">Dashboard</a>
                <a class="list-group-item list-group-item-action warnabar" href="<?php echo base_url('/admin/statistik') ?>">Statistik</a>
                <a class="list-group-item list-group-item-action warnabar" href="<?php echo base_url('/admin/registrasi') ?>">Data Registrasi</a>
                <a class="list-group-item list-group-item-action warnabar" href="<?php echo base_url('/admin/akunAdmin') ?>">Info Akun</a>
            </div>
            <a href="/admin/logout" class="btn my-3" style="color: white; background-color: #EF4444">Logout</a>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper" class="p-4">
            <!-- Top navigation-->
            <!-- <nav class="navbar navbar-expand-lg">
                <div class="container-fluid px-5" style="height: 90px;"> -->
            <!-- <a class="p-3 bg-dark" href="<?php echo base_url('/logout') ?>">Logout</a> -->
            <!-- </div>
                </nav> -->

            <!-- Page content-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?= $this->renderSection('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <!-- <script src="/js/scripts.js"></script> -->
    <script>
        function preview() {
            const sampul = document.querySelector('#foto_artikel');
            const sampul_label = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            sampul_label.textContent = sampul.files[0].name;
            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>