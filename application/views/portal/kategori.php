<div class="content">
    <div class="container">
        <div class="category-title">
            <div class="col-12 text-center mt-4">
                <h1 class="h2 h1-md">Kategori: <span><?= $kategori ?></span></h1>
                <hr class="hr-after mx-auto">
            </div>

        </div>
        <div class=" row">

            <div class="col-md-8 col-12">
                <div class="row">
                    <div class="border-bottom-last-0 first-pt-0">
                        <div class="card card-full hover-a py-4 post-1284 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion tag-kids-fashion tag-wear">
                            <?php $i = 0;
                            foreach ($berita as $latest) {
                                if (++$i > 5) break;
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
                                                <a href="<?= base_url('detail/') . $latest->id_berita ?>"><?= substr($latest->judul_berita, 0, 100)  ?></a>
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