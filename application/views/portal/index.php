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
            <div id="bg-menu" style='background-color: #128673;'>
                <div class="container">
                    <nav class="nav-container style" id="draggable">
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
                        <a href="#!" class="nav-item">Latest</a>
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
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="Los Angeles" width="800px" height="500px">
                                <div class="carousel-caption ">
                                    <h3>Los Angeles</h3>
                                    <p>We had such a great time in LA!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url('assets/img/berita/') ?>2.jpg" alt="Chicago" width="800" height="500">
                                <div class="carousel-caption">
                                    <h3>Chicago</h3>
                                    <p>Thank you, Chicago!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url('assets/img/berita/') ?>3.jpg" alt="New York" width="800" height="500">
                                <div class="carousel-caption">
                                    <h3>New York</h3>
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
                    <span>Popular Post</span>
                    <div class="block-title-4"></div>
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
                                <div class="sd-popular-text">
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
                                <div class="sd-popular-text">
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
                                <div class="sd-popular-text">
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
                                <span class="bg-primary text-white">
                                    Video
                                </span>
                            </h4>
                            <ul class="nav nav-tabs nav-block-link1 d-inline">
                                <a href="">View All</a>
                            </ul>
                        </div>
                        <div id="carousel">
                            <div class="large-12 columns">
                                <div class="owl-carousel owl-theme show-navigation owl-loaded owl-drag">
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

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <!-- Pemerintahan -->
                    <div class="block-title-6">
                        <h4 class="h5 border-primary">
                            <span class="bg-primary text-white">
                                Pemerintahan
                            </span>
                        </h4>
                        <ul class="nav nav-tabs nav-block-link1 d-inline">
                            <a href="">View All</a>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <article class="card card-full hover-a mb-4">
                                <div class="image-wrapper">
                                    <a href="http://google.com">
                                        <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="360" height="202">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title h3-sm h1-md h3-lg font-title">
                                        <a href="http://google.com">
                                            Hujan Angin, Pohon Tumbang Halangi Jalan Masuk
                                        </a>
                                    </h2>
                                    <div class="card-text mb-2 text-muted small ">
                                        <span class="font-weight-bold d-none d-sm-inline mr-1">
                                            <a href="http://google.com">Arip</a>
                                        </span>
                                        <time class="news-date">20 Februari 2021</time>
                                        <span class="float-right">
                                            <span class="fa fa-comments" aria-hidden="true">
                                                9
                                            </span>
                                        </span>
                                    </div>
                                    <p class="card-text font-body">This study examines the classroom talk about models and modelling of two secondary science teachers implementing a model-based inquiry instructional unit. The goal...</p>
                                </div>

                            </article>
                        </div>
                        <div class="col-md-6 col-12">
                            <article class="card card-full hover-a mb-4">
                                <div class="row">
                                    <div class="col-5 col-md-4 pe-2 pe-md-0">
                                        <div class="ratio_115-80 image-wrapper">
                                            <a href="http://google.com">
                                                <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="card-body pt-0">
                                            <div class="card-title h6 h5-sm h6-lg">
                                                <a href="http://google.com">Hujan Angin, Pohon Tumbang Halangi Jalan Masuk </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 col-md-4 pe-2 pe-md-0">
                                        <div class="ratio_115-80 image-wrapper">
                                            <a href="http://google.com">
                                                <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="card-body pt-0">
                                            <div class="card-title h6 h5-sm h6-lg">
                                                <a href="http://google.com">Hujan Angin, Pohon Tumbang Halangi Jalan Masuk </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 col-md-4 pe-2 pe-md-0">
                                        <div class="ratio_115-80 image-wrapper">
                                            <a href="http://google.com">
                                                <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="card-body pt-0">
                                            <div class="card-title h6 h5-sm h6-lg">
                                                <a href="http://google.com">Hujan Angin, Pohon Tumbang Halangi Jalan Masuk </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 col-md-4 pe-2 pe-md-0">
                                        <div class="ratio_115-80 image-wrapper">
                                            <a href="http://google.com">
                                                <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="card-body pt-0">
                                            <div class="card-title h6 h5-sm h6-lg">
                                                <a href="http://google.com">Hujan Angin, Pohon Tumbang Halangi Jalan Masuk </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!-- End Pemerintahan -->
                    <div class="row">
                        <!-- Pariwisata -->
                        <div class="col-md-6 col-12">
                            <div class="block-title-6">
                                <h4 class="h5 border-primary">
                                    <span class="bg-primary text-white">
                                        Pariwisata
                                    </span>
                                </h4>
                                <ul class="nav nav-tabs nav-block-link1 d-inline">
                                    <a href="">View All</a>
                                </ul>
                            </div>
                            <article class="card card-full hover-a mb-4">
                                <div class="image-wrapper">
                                    <a href="http://google.com">
                                        <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="360" height="202">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title h3-sm h1-md h3-lg">
                                        <a href="http://google.com">
                                            Hujan Angin, Pohon Tumbang Halangi Jalan Masuk
                                        </a>
                                    </h2>
                                    <div class="card-text mb-2 text-muted small">
                                        <span class="font-weight-bold d-none d-sm-inline mr-1">
                                            <a href="http://google.com">Arip</a>
                                        </span>
                                        <time class="news-date">20 Februari 2021</time>
                                        <span class="float-right">
                                            <span class="fa fa-comments" aria-hidden="true">
                                                9
                                            </span>
                                        </span>
                                    </div>
                                    <p class="card-text">This study examines the classroom talk about models and modelling of two secondary science teachers implementing a model-based inquiry instructional unit. The goal...</p>
                                </div>
                            </article>
                            <div class="row">
                                <div class="col-5 col-md-4 pe-2 pe-md-0">
                                    <div class="ratio_115-80 image-wrapper">
                                        <a href="http://google.com">
                                            <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="card-body pt-0">
                                        <div class="card-title h6 h5-sm h6-lg">
                                            <a href="http://google.com">Hujan Angin, Pohon Tumbang Halangi Jalan Masuk </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 col-md-4 pe-2 pe-md-0">
                                    <div class="ratio_115-80 image-wrapper">
                                        <a href="http://google.com">
                                            <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="card-body pt-0">
                                        <div class="card-title h6 h5-sm h6-lg">
                                            <a href="http://google.com">Hujan Angin, Pohon Tumbang Halangi Jalan Masuk </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Pariwisata -->
                        <!-- Budaya -->
                        <div class="col-md-6 col-12">
                            <div class="block-title-6">
                                <h4 class="h5 border-primary">
                                    <span class="bg-primary text-white">
                                        Budaya
                                    </span>
                                </h4>
                                <ul class="nav nav-tabs nav-block-link1 d-inline">
                                    <a href="">View All</a>
                                </ul>
                            </div>
                            <article class="card card-full hover-a mb-4">
                                <div class="image-wrapper">
                                    <a href="http://google.com">
                                        <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="360" height="202">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title h3-sm h1-md h3-lg">
                                        <a href="http://google.com">
                                            Hujan Angin, Pohon Tumbang Halangi Jalan Masuk
                                        </a>
                                    </h2>
                                    <div class="card-text mb-2 text-muted small">
                                        <span class="font-weight-bold d-none d-sm-inline mr-1">
                                            <a href="http://google.com">Arip</a>
                                        </span>
                                        <time class="news-date">20 Februari 2021</time>
                                        <span class="float-right">
                                            <span class="fa fa-comments" aria-hidden="true">
                                                9
                                            </span>
                                        </span>
                                    </div>
                                    <p class="card-text">This study examines the classroom talk about models and modelling of two secondary science teachers implementing a model-based inquiry instructional unit. The goal...</p>
                                </div>
                            </article>
                            <div class="row">
                                <div class="col-5 col-md-4 pe-2 pe-md-0">
                                    <div class="ratio_115-80 image-wrapper">
                                        <a href="http://google.com">
                                            <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="card-body pt-0">
                                        <div class="card-title h6 h5-sm h6-lg">
                                            <a href="http://google.com">Hujan Angin, Pohon Tumbang Halangi Jalan Masuk </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 col-md-4 pe-2 pe-md-0">
                                    <div class="ratio_115-80 image-wrapper">
                                        <a href="http://google.com">
                                            <img src="<?= base_url('assets/img/berita/') ?>1.jpg" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="card-body pt-0">
                                        <div class="card-title h6 h5-sm h6-lg">
                                            <a href="http://google.com">Hujan Angin, Pohon Tumbang Halangi Jalan Masuk </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Budaya -->
                    </div>

                </div>
                <div class="col-md-4 col-12">
                    <div class="side-nav">
                        <!-- Iklan -->
                        <div class="side-ads">
                            <img class="side-img" src="<?= base_url('assets/img/') ?>side-ads.png">
                        </div>
                        <!-- End Iklan -->
                        <div class="block-title-6">
                            <h4 class="h5 border-primary">
                                <span class="bg-primary text-white">
                                    Sosial Media
                                </span>
                            </h4>
                            <a href="#" class="fa fa-facebook fasm sosmed-facebook"></a>
                            <a href="#" class="fa fa-google fasm sosmed-google"></a>
                            <a href="#" class="fa fa-youtube fasm sosmed-youtube"></a>
                            <a href="#" class="fa fa-instagram fasm sosmed-youtube  "></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="container">
        <div class="row">
            <!-- Video -->
            <div class="col-12">
                <div class="block-area pt-4 pb-4 px-4 border bg-light-black mb-5">
                    <div class="block-title-6">
                        <h4 class="h5 border-primary">
                            <span class="bg-primary text-white">
                                Hot News
                            </span>
                        </h4>
                        <ul class="nav nav-tabs nav-block-link1 d-inline">
                            <a href="">View All</a>
                        </ul>
                    </div>
                    <div id="carousel">
                        <div class="large-12 columns">
                            <div class="owl-carousel owl-theme show-navigation owl-loaded owl-drag">
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

    <!-- <div class="container">
        <div id="carousel">
            <div class="row">
                <div class="large-12 columns">
                    <div class="owl-carousel owl-theme">
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
                        <div class="item">
                            <img src="<?= base_url('assets/img/berita/') ?>1.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</body>


</html>



<!-- <script src="<?= base_url() ?>assets/portaltn/js/jquery.min.js"></script> -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/portaltn/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/portaltn/js/owl.carousel.js"></script>
<!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    })
</script>
<script>
    $(function() {
        $("#draggable").draggable({
            axis: "x",
            containment: "parent"
        });
    });
</script>