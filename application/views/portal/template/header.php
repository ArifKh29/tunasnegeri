<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/portaltn/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/portaltn/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/portaltn/css/docs.theme.min.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/portaltn/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/portaltn/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Harmattan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira Sans">



    <title>Tunas Negeri</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <img src="<?= base_url() ?>assets/portaltn/img/logo.png" alt="Logo Tunas Negeri" class="nav-logo">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-navbar" id="navbarCollapse" ">
                <div class=" navbar-nav">
                <form class="form-inline">
                    <input type="text" class="search__input" placeholder="Search">
                </form>
            </div>
        </div>
        <div class="navbar-tools">
            <div class="row">
                <!-- <a>Minggu, 28 Februari 2021</a> -->
                <a href="#" class="fa fa-facebook fatop top-facebook"></a>
                <a href="#" class="fa fa-google fatop top-google"></a>
                <a href="#" class="fa fa-youtube fatop top-youtube"></a>
                <a href="#" class="fa fa-instagram fatop top-youtube  "></a>
            </div>
        </div>
        </div>
    </nav>
    <div class="sticky-top">
        <div class="hr-nav ">
            <!-- Class hr-nav-2-->
            <div class="bg-menu" style="background-color: #128673;">
                <div class="container">
                    <nav class="nav-container style font-navbar" id="draggable">
                        <a href="<?= base_url() ?>" class="nav-item">Home</a>
                        <?php
                        foreach ($menu as $m) { ?>
                            <a href="<?= base_url('Dashboard/kategori/') . $m->nama_kategori ?>" class="nav-item"><?= $m->nama_kategori ?></a>
                        <?php
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>