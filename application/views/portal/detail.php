<div class="content pt-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-8 col-12">
                <header class="entry-header post-title">
                    <h1 class="entry-title display-5 display-2-lg mt-2"><?= $detail['judul_berita'] ?></h1>
                    <div class="entry-meta post-atribute mb-3 small fw-normal text-muted">
                        <span class="byline me-2 me-md-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-person me-1" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                            </svg> by<span class="author vcard"><a class="url fn n fw-bold"> <?= $detail['author'] ?></a></span></span><span class="posted-on me-2 me-md-3">
                            <span title="Posted on"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil-square me-1" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                </svg></span> <time class="entry-date published" datetime="2019-06-16T02:12:03+00:00">June 16, 2019</time> <time class="updated d-none d-md-inline-block" datetime="2019-06-28T08:23:17+00:00"> ( June 28, 2019 ) </time></span>

                    </div>
                </header>
                <div class="entry-content post-content">
                    <figure class="image-single-wrapper">
                        <img width="750" height="500" src="<?= base_url('assets/img/berita/') . $detail['foto'] ?>" class="img-fluid lazy wp-post-image loaded" alt="Mir has winning mindset, ‘same calibre as Vinales, Rins’" loading="lazy" sizes="(max-width: 750px) 100vw, 750px" data-was-processed="true">
                        <!-- <figcaption class="bg-themes">motorcycle racer</figcaption> -->
                    </figure>
                    <?= $detail['isi'] ?>
                </div>
                <div id="comments" class="mb-5">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/default/2019/06/what-top-davis-trade-contenders-can-actually-offer/#respond" style="display:none;">Cancel reply</a></small></h3>
                        <form action="https://demo.bootstrap.news/default/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                            <div class="form-group comment-form-comment"><textarea aria-label="comments" class="form-control mb-4" id="comment" placeholder="Comments *" name="comment" cols="45" rows="8" required=""></textarea></div>
                            <div class="form-group comment-form-author"><input class="form-control mb-4" aria-label="name" id="author" placeholder="Name*" name="author" type="text" value="" size="30" aria-required="true" required=""></div>
                            <div class="form-group comment-form-email"><input class="form-control mb-4" aria-label="email" id="email" placeholder="Email *" name="email" type="email" value="" size="30" aria-required="true" required=""></div>
                            <div class="form-group form-check comment-form-cookies-consent"><input class="form-check-input" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label class="form-check-label" for="wp-comment-cookies-consent">Save my name, email and website in this browser for the next time I comment</label></div>
                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="btn btn-primary" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="1179" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            </p>
                        </form>
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