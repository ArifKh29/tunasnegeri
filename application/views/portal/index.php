<div class="top-page">

    <div class="container">
        <div class="top-ads pt-2">
            <img class="top" src="<?= base_url('assets/img/ads/top-ads.png') ?> " alt="">
        </div>
        <div class="row">

            <!-- Left Slider -->
            <div class="col-lg-8 pt-3">
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
            <div class="col-lg-4 pt-3">
                <div class="block-title-6">
                    <h4 class="h5 border-primary">
                        <span class="bg-primary text-white">
                            Popular Post
                        </span>
                    </h4>

                </div>
                <div class="sd-popular-post">
                    <?php
                    $i = 1;
                    foreach ($popular as $p) { ?>
                        <div class="row pb-3">
                            <div class="col-lg-3 col-3 pr-0 pb-0">
                                <div class="popular-image">
                                    <a href="<?= base_url('dashboard/detail/') . $p->id_berita ?>"><img class="sd-popular-image" src="<?= base_url('assets/portaltn/img/icon/') ?><?= $i ?>.png" alt="Popular Post"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-9">
                                <div class="sd-popular-text font-title">
                                    <a href="<?= base_url('dashboard/detail/') . $p->id_berita ?>"><?= substr($p->judul_berita, 0, 60) . '...' ?></a>
                                </div>
                            </div>
                        </div>
                    <?php $i++;
                    } ?>
                    <!-- <div class="row pb-3">
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
                        </div> -->

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
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <!-- Pemerintahan -->
                <div class="block-title-6">
                    <h4 class="h5 border-primary">
                        <span class="bg-primary text-white font-navbar">
                            Pemerintahan
                        </span>
                    </h4>
                    <ul class="nav nav-tabs nav-block-link1 d-inline font-navbar">
                        <a href="">View All</a>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <?php $i = 0;
                        // $beritapemerintah = $berita;
                        foreach ($pemerintahan as $pemerintah) {
                            if ($pemerintah->nama_kategori == 'Pemerintahan') {
                                if (++$i > 1) break;
                        ?>
                                <article class="card card-full hover-a mb-4">
                                    <div class="image-wrapper">
                                        <a href="http://google.com">
                                            <img src="<?= base_url('assets/img/berita/') . $pemerintah->foto ?>" alt="" sizes="(max-width: 360px) 100vw, 360px" width="360" height="202">
                                        </a>
                                    </div>
                                    <div class="card-body ">
                                        <h2 class="card-title h3-sm h1-md h3-lg font-title">
                                            <a href="http://google.com">
                                                <?= $pemerintah->judul_berita ?>
                                            </a>
                                        </h2>
                                        <div class="card-text mb-2 text-muted small ">
                                            <span class="font-weight-bold d-none d-sm-inline mr-1">
                                                <a href="http://google.com"><?= $pemerintah->name ?></a>
                                            </span>
                                            <time class="news-date"><?= $pemerintah->tanggal ?></time>
                                            <span class="float-right">
                                                <span class="fa fa-comments" aria-hidden="true">
                                                    9
                                                </span>
                                            </span>
                                        </div>
                                        <p class="card-text font-body" style="color: #4d4d4d"><?= $pemerintah->cuplik ?></p>
                                    </div>

                                </article>
                        <?php }
                        } ?>
                    </div>
                    <div class="col-md-6 col-12">
                        <article class="card card-full hover-a mb-4">
                            <?php $i = 0;
                            // $beritapemerintah = $berita;
                            unset($pemerintahan[0]);
                            foreach ($pemerintahan as $pemerintah) {
                                if ($pemerintah->nama_kategori == 'Pemerintahan') {
                                    if (++$i > 4) break;
                            ?>
                                    <div class="row">
                                        <div class="col-5 col-md-5 pe-2 pe-md-0">
                                            <div class="ratio_115-80 image-wrapper">
                                                <a href="http://google.com">
                                                    <img src="<?= base_url('assets/img/berita/') . $pemerintah->foto ?>" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-7 text-title">
                                            <div class="card-body pt-0">
                                                <div class="card-title h1-sm h1-md h1-lg font-title">
                                                    <a href="http://google.com"> <?= $pemerintah->judul_berita ?> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </article>
                    </div>
                </div>
                <!-- End Pemerintahan -->
                <div class="row">
                    <!-- Pariwisata -->
                    <div class="col-md-6 col-12">
                        <div class="block-title-6">
                            <h4 class="h5 border-primary">
                                <span class="bg-primary text-white font-navbar">
                                    Peristiwa
                                </span>
                            </h4>
                            <ul class="nav nav-tabs nav-block-link1 d-inline font-navbar">
                                <a href="">View All</a>
                            </ul>
                        </div>
                        <?php $i = 0;
                        $beritaperistiwa = $peristiwa;
                        foreach ($beritaperistiwa as $per) {
                            if (++$i > 1) break;
                        ?>
                            <article class="card card-full hover-a mb-4">
                                <div class="image-wrapper">
                                    <a href="<?= base_url('dashboard/detail/') . $per->id_berita ?>">
                                        <img src="<?= base_url('assets/img/berita/') . $per->foto ?>" alt="" sizes="(max-width: 360px) 100vw, 360px" width="360" height="202">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title h3-sm h1-md h3-lg font-title">
                                        <a href="<?= base_url('dashboard/detail/') . $per->id_berita ?>">
                                            <?= $per->judul_berita ?>
                                        </a>
                                    </h2>
                                    <div class="card-text mb-2 text-muted small">
                                        <span class="font-weight-bold d-none d-sm-inline mr-1">
                                            <a href="http://google.com">Arip</a>
                                        </span>
                                        <time class="news-date"><?= $per->tanggal ?></time>
                                        <span class="float-right">
                                            <span class="fa fa-comments" aria-hidden="true">
                                                9
                                            </span>
                                        </span>
                                    </div>
                                    <p class="card-text font-body" style="color: #4d4d4d"><?= substr($per->cuplik, 0, 150) . '...' ?></p>
                                </div>
                            </article>
                        <?php
                        } ?>
                        <?php $i = 0;
                        // $beritapemerintah = $berita;
                        $subberitaperistiwa = $peristiwa;
                        unset($subberitaperistiwa[0]);
                        foreach ($subberitaperistiwa as $per) {
                            if ($per->nama_kategori == 'Peristiwa') {
                                if (++$i > 2) break;
                        ?>
                                <div class="row">
                                    <div class="col-5 col-md-5 pe-2 pe-md-0">
                                        <div class="ratio_115-80 image-wrapper">
                                            <a href="<?= base_url('dashboard/detail/') . $per->id_berita ?>">
                                                <img src="<?= base_url('assets/img/berita/') . $per->foto ?>" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-7 text-title">
                                        <div class="card-body pt-0 text-title">
                                            <div class="card-title h1-sm h1-md h1-lg font-title">
                                                <a href="<?= base_url('dashboard/detail/') . $per->id_berita ?>"><?= $per->judul_berita ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                    <!-- End Pariwisata -->
                    <!-- Budaya -->
                    <div class="col-md-6 col-12">
                        <div class="block-title-6">
                            <h4 class="h5 border-primary">
                                <span class="bg-primary text-white font-navbar">
                                    Budaya
                                </span>
                            </h4>
                            <ul class="nav nav-tabs nav-block-link1 d-inline font-navbar">
                                <a href="">View All</a>
                            </ul>
                        </div>
                        <?php $i = 0;
                        $beritabudaya = $budaya;
                        foreach ($beritabudaya as $bud) {
                            if (++$i > 1) break;
                        ?>
                            <article class="card card-full hover-a mb-4">
                                <div class="image-wrapper">
                                    <a href="<?= base_url('dashboard/detail/') . $bud->id_berita ?>">
                                        <img src="<?= base_url('assets/img/berita/') . $bud->foto ?>" alt="" sizes="(max-width: 360px) 100vw, 360px" width="360" height="202">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title h3-sm h1-md h3-lg font-title">
                                        <a href="<?= base_url('dashboard/detail/') . $bud->id_berita ?>">
                                            <?= $bud->judul_berita ?>
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
                                    <p class="card-text font-body" style="color: #4d4d4d"><?= substr($bud->cuplik, 0, 150) . '...' ?></p>
                                </div>
                            </article>
                        <?php } ?>
                        <?php $i = 0;
                        // $beritapemerintah = $berita;
                        $subberitabudaya = $budaya;
                        unset($subberitabudaya[0]);
                        foreach ($subberitabudaya as $bud) {
                            if ($per->nama_kategori == 'Peristiwa') {
                                if (++$i > 2) break;
                        ?>
                                <div class="row">
                                    <div class="col-5 col-md-5 pe-2 pe-md-0">
                                        <div class="ratio_115-80 image-wrapper">
                                            <a href="<?= base_url('dashboard/detail/') . $bud->id_berita ?>">
                                                <img src="<?= base_url('assets/img/berita/') . $bud->foto ?>" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-7 text-title">
                                        <div class="card-body pt-0 text-title">
                                            <div class="card-title h1-sm h1-md h1-lg font-title">
                                                <a href="<?= base_url('dashboard/detail/') . $bud->id_berita ?>"><?= $bud->judul_berita ?> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                    <!-- End Budaya -->
                </div>

            </div>
            <div class="col-lg-4 scol-md-12 col-12">
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
                <div class="side-nav make-sticky">
                    <div class="block-title-6">
                        <h4 class="h5 border-primary">
                            <span class="bg-primary text-white font-navbar">
                                Latest Post
                            </span>
                        </h4>
                        <ul class="nav nav-tabs nav-block-link1 d-inline font-navbar">
                            <a href="">View All</a>
                        </ul>
                    </div>
                    <?php $i = 0;
                    foreach ($berita as $latest) {

                        if (++$i > 5) break;
                    ?>
                        <div class="row">
                            <div class="col-5 col-md-5 pe-2 pe-md-0">
                                <div class="ratio_115-80 image-wrapper">
                                    <a href="<?= base_url('dashboard/detail/') . $latest->id_berita ?>">
                                        <img src="<?= base_url('assets/img/berita/') . $latest->foto ?>" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-md-7 text-title">
                                <div class="card-body pt-0 text-title">
                                    <div class="card-title h1-sm h1-md h1-lg font-title">
                                        <a href="<?= base_url('dashboard/detail/') . $latest->id_berita ?>"><?= $latest->judul_berita ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
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
                        <span class="bg-primary text-white font-navbar">
                            Hot News
                        </span>
                    </h4>
                    <ul class="nav nav-tabs nav-block-link1 d-inline font-navbar">
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

<div class="latest-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <!-- Latest Post -->
                <div class="block-title-6">
                    <h4 class="h5 border-primary">
                        <span class="bg-primary text-white font-navbar">
                            Latest Post
                        </span>
                    </h4>
                    <ul class="nav nav-tabs nav-block-link1 d-inline font-navbar">
                        <a href="">View All</a>
                    </ul>
                </div>
                <div class="border-bottom-last-0 first-pt-0">
                    <div class="card card-full hover-a py-4 post-1284 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion tag-kids-fashion tag-wear">
                        <?php
                        foreach ($berita as $latest) {
                        ?>
                            <div class="row pb-4">
                                <div class="col-md-6 col-lg-6 col-12 ">
                                    <div class="ratio_360-202 image-wrapper">
                                        <a href="<?= base_url('Dashboard/detail/') . $latest->id_berita ?>/">
                                            <img width="360" height="202" src="<?= base_url('assets/img/berita/') . $latest->foto ?>" sizes="(max-width: 360px) 100vw, 360px" data-was-processed="true">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-12 ">
                                    <div class="card-body pt-3 pt-sm-0 pt-md-3 pt-lg-0">
                                        <h3 class="card-title h3-sm h1-md h3-lg font-title">
                                            <a href="<?= base_url('Dashboard/detail/') . $latest->id_berita ?>"><?= substr($latest->judul_berita, 0, 100)  ?></a>
                                        </h3>
                                        <div class="card-text mb-2 text-muted small">
                                            <span class="fw-bold d-none d-sm-inline me-1">
                                                <a href="https://demo.bootstrap.news/default/author/aribudin/" title="by <?= $latest->name ?>" rel="author"><?= $latest->name ?></a> </span>
                                            <time class="news-date" datetime="2019-06-16T13:08:03+00:00"><?= $latest->tanggal ?></time>
                                        </div>
                                        <p class="card-text"><?= substr($latest->cuplik, 0, 150) . '...' ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 scol-md-12 col-12">
                <div class="side-nav">
                    <!-- Iklan -->
                    <div class="side-ads">
                        <img class="side-img" src="<?= base_url('assets/img/') ?>side-ads.png">
                    </div>
                    <!-- End Iklan -->
                    <!-- <div class="block-title-6">
                        <h4 class="h5 border-primary">
                            <span class="bg-primary text-white">
                                Sosial Media
                            </span>
                        </h4>
                        <a href="#" class="fa fa-facebook fasm sosmed-facebook"></a>
                        <a href="#" class="fa fa-google fasm sosmed-google"></a>
                        <a href="#" class="fa fa-youtube fasm sosmed-youtube"></a>
                        <a href="#" class="fa fa-instagram fasm sosmed-youtube  "></a>
                    </div> -->

                </div>
                <!-- <div class="side-nav make-sticky">
                    <div class="block-title-6">
                        <h4 class="h5 border-primary">
                            <span class="bg-primary text-white font-navbar">
                                Latest Post
                            </span>
                        </h4>
                        <ul class="nav nav-tabs nav-block-link1 d-inline font-navbar">
                            <a href="">View All</a>
                        </ul>
                    </div>
                    <?php $i = 0;
                    foreach ($berita as $latest) {

                        if (++$i > 5) break;
                    ?>
                        <div class="row">
                            <div class="col-5 col-md-5 pe-2 pe-md-0">
                                <div class="ratio_115-80 image-wrapper">
                                    <a href="<?= base_url('dashboard/detail/') . $latest->id_berita ?>">
                                        <img src="<?= base_url('assets/img/berita/') . $latest->foto ?>" alt="" sizes="(max-width: 360px) 100vw, 360px" width="127" height="80">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-md-7 text-title">
                                <div class="card-body pt-0 text-title">
                                    <div class="card-title h1-sm h1-md h1-lg font-title">
                                        <a href="<?= base_url('dashboard/detail/') . $latest->id_berita ?>"><?= $latest->judul_berita ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div> -->
            </div>
        </div>
    </div>
</div>