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
            <div class="collapse navbar-collapse" id="navbarCollapse" style="padding-left: 50px;">
                <div class="navbar-nav">
                    <form class="form-inline ml-auto">
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
                        <?php
                        foreach ($menu as $m) { ?>
                            <a href="<?= base_url() ?>" class="nav-item"><?= $m->nama_kategori ?></a>
                        <?php
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="top-page">
        <div class="container">
            <div class="row">

                <!-- Left Slider -->
                <div class="col-lg-8 pt-5">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators ">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="Los Angeles" width="800px" height="500px">
                                <div class="carousel-caption  ">
                                    <h3 class="font-title">Los Angeles</h3>
                                    <p>We had such a great time in LA!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url('assets/img/berita/') ?>2.jpg" alt="Chicago" width="800" height="500">
                                <div class="carousel-caption">
                                    <h3 class="font-title">Chicago</h3>
                                    <p>Thank you, Chicago!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url('assets/img/berita/') ?>3.jpg" alt="New York" width="800" height="500">
                                <div class="carousel-caption">
                                    <h3 class="font-title">New York</h3>
                                    <p>We love the Big Apple!</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <!-- End Left Slider -->
                <!-- Popular Post -->
                <div class="col-lg-4 pt-5">
                    <div class="block-title-6">
                        <h4 class="h5 border-primary">
                            <span class="bg-primary text-white">
                                Popular Post
                            </span>
                        </h4>

                    </div>
                    <div class="sd-popular-post">
                        <div class="row pb-3">
                            <div class="col-3">
                                <div class="popular-image">
                                    <img style="width: 80px ; height: 80px " src="<?= base_url('assets/portaltn/img/icon/') ?>1.png" alt="Popular Post">
                                </div>

                            </div>
                            <div class="col-9">
                                <div class="sd-popular-text font-title">
                                    Hujan Angin, Pohon Tumbang Halangi Jalan Masuk
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-3">
                                <div class="popular-image">
                                    <img style="width: 80px ; height: 80px " src="<?= base_url('assets/portaltn/img/icon/') ?>2.png" alt="Popular Post">
                                </div>

                            </div>
                            <div class="col-9">
                                <div class="sd-popular-text font-title">
                                    Hujan Angin, Pohon Tumbang Halangi Jalan Masuk
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-3">
                                <div class="popular-image">
                                    <img style="width: 80px ; height: 80px " src="<?= base_url('assets/portaltn/img/icon/') ?>3.png" alt="Popular Post">

                                </div>

                            </div>
                            <div class="col-9">
                                <div class="sd-popular-text font-title">
                                    Hujan Angin, Pohon Tumbang Halangi Jalan Masuk
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-3">
                                <div class="popular-image">
                                    <img style="width: 80px ; height: 80px " src="<?= base_url('assets/portaltn/img/icon/') ?>4.png" alt="Popular Post">

                                </div>

                            </div>
                            <div class="col-9">
                                <div class="sd-popular-text font-title">
                                    Hujan Angin, Pohon Tumbang Halangi Jalan Masuk
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Popular Post -->

                <!-- Video -->
                <div class="col-12">
                    <div class="block-area pt-4 pb-4 px-4 border bg-light-black mb-5">
                        <div class="block-title-6">
                            <h4 class="h5 border-primary">
                                <span class="bg-primary text-white font-navbar">
                                    Video
                                </span>
                            </h4>
                            <ul class="nav nav-tabs nav-block-link1 d-inline font-navbar ">
                                <a href="">View All</a>
                            </ul>
                        </div>
                        <div id="carousel">
                            <div class="large-12 columns">
                                <div class="owl-carousel owl-theme show-navigation owl-loaded owl-drag">
                                    <div class="item ">
                                        <img src="<?= base_url('assets/img/berita/') ?>1.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="<?= base_url('assets/img/berita/') ?>1.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="<?= base_url('assets/img/berita/') ?>1.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="<?= base_url('assets/img/berita/') ?>1.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="<?= base_url('assets/img/berita/') ?>1.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="<?= base_url('assets/img/berita/') ?>1.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="<?= base_url('assets/img/berita/') ?>1.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Video -->
            </div>
        </div>
    </div>