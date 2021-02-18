<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section header--style-1">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg--color-2">
                <div class="container">
                    <div class="float--left float--xs-none text-xs-center">
                        <!-- Header Topbar Info Start -->
                        <ul class="header--topbar-info nav">
                            <!-- <li><i class="fa fm fa-map-marker"></i>New York</li>
                            <li><i class="fa fm fa-mixcloud"></i>21<sup>0</sup> C</li> -->
                            <li><i class="fa fm fa-calendar"></i>Today (<?= date('l, d F Y');?>)</li>
                        </ul>
                        <!-- Header Topbar Info End -->
                    </div>

                    <div class="float--right float--xs-none text-xs-center">
                        <!-- Header Topbar Action Start -->
                        <ul class="header--topbar-action nav">
                            <li><a href="<?= base_url('auth')?>"><i class="fa fm fa-user-o"></i>Login/Register</a></li>
                        </ul>
                        <!-- Header Topbar Action End -->

                        <!-- Header Topbar Language Start -->
                        <!-- <ul class="header--topbar-lang nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fm fa-language"></i>English<i class="fa flm fa-angle-down"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                        </ul> -->
                        <!-- Header Topbar Language End -->

                        <!-- Header Topbar Social Start -->
                        <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                        <!-- Header Topbar Social End -->
                    </div>
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Mainbar Start -->
            <div class="header--mainbar">
                <div class="container">
                    <!-- Header Logo Start -->
                    <div class="header--logo float--left float--sm-none text-sm-center">
                        <h1 class="h1">
                            <a href="home-1.html" class="btn-link">
                                <img src="<?= base_url('assets/front/') ?>img/logo.png" alt="USNews Logo">
                                <span class="hidden">USNews Logo</span>
                            </a>
                        </h1>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Ad Start -->
                    <div class="header--ad float--right float--sm-none hidden-xs">
                        <a href="#">
                            <img src="<?= base_url('assets/front/') ?>img/ads-img/ad-728x90-01.jpg" alt="Advertisement">
                        </a>
                    </div>
                    <!-- Header Ad End -->
                </div>
            </div>
            <!-- Header Mainbar End -->

            <!-- Header Navbar Start -->
            <div class="header--navbar style--1 navbar bd--color-1 bg--color-1" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--left">
                        <!-- Header Menu Links Start -->
                        <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                            <li class="active">
                                <a href="<?= base_url() ?>">Home<i></i></a>
                            </li>
                            <?php foreach($menu as $m){ ?>
                            <li class="dropdown">
                                <a href="dashboard/<?= $m->nama_kategori?>" class="dropdown-toggle" data-toggle="dropdown"><?= $m->nama_kategori?><i class="fa flm fa-angle-down"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="home-1.html">Home Default</a></li>
                                    <li><a href="home-1-boxed.html">Home Boxed</a></li>
                                    <li><a href="home-1-rtl.html">Home RTL</a></li>
                                    <li><a href="home-1-rtl-boxed.html">Home RTL Boxed</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home Versions<i class="fa flm fa-angle-right"></i></a>

                                        <ul class="dropdown-menu">
                                            <li><a href="home-1.html">Home Version 01</a></li>
                                            <li><a href="home-2.html">Home Version 02</a></li>
                                            <li><a href="home-3.html">Home Version 03</a></li>
                                            <li><a href="home-4.html">Home Version 04</a></li>
                                            <li><a href="home-5.html">Home Version 05</a></li>
                                            <li><a href="home-6.html">Home Version 06</a></li>
                                            <li><a href="home-7.html">Home Version 07</a></li>
                                            <li><a href="home-8.html">Home Version 08</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Versions<i class="fa flm fa-angle-right"></i></a>

                                        <ul class="dropdown-menu">
                                            <li><a href="home-1.html">Home Menu V1</a></li>
                                            <li><a href="home-menu-v2.html">Home Menu V2</a></li>
                                            <li><a href="home-menu-v3.html">Home Menu V3</a></li>
                                            <li><a href="home-menu-v4.html">Home Menu V4</a></li>
                                            <li><a href="home-menu-v5.html">Home Menu V5</a></li>
                                            <li><a href="home-menu-v6.html">Home Menu V6</a></li>
                                            <li><a href="home-menu-v7.html">Home Menu V7</a></li>
                                            <li><a href="home-menu-v8.html">Home Menu V8</a></li>
                                            <li><a href="home-menu-v9.html">Home Menu V9</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <?php }?>
                        </ul>
                        <!-- Header Menu Links End -->
                    </div>

                    <!-- Header Search Form Start -->
                    <form action="#" class="header--search-form float--right" data-form="validate">
                        <input type="search" name="search" placeholder="Search..." class="header--search-control form-control" required>

                        <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>
                    </form>
                    <!-- Header Search Form End -->
                </div>
            </div>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->

        <!-- Posts Filter Bar Start -->
        <!-- <div class="posts--filter-bar style--1 hidden-xs">
            <div class="container">
                <ul class="nav">
                    <li>
                        <a href="#">
                            <i class="fa fa-star-o"></i>
                            <span>Featured News</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-heart-o"></i>
                            <span>Most Popular</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-fire"></i>
                            <span>Hot News</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-flash"></i>
                            <span>Trending News</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-eye"></i>
                            <span>Most Watched</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- Posts Filter Bar End -->

        <!-- News Ticker Start -->
        <div class="news--ticker">
            <div class="container">
                <div class="title">
                    <h2>News Updates</h2>
                    <span>(Update 12 minutes ago)</span>
                </div>

                <div class="news-updates--list" data-marquee="true">
                    <ul class="nav">
                        <li>
                            <h3 class="h3"><a href="#">Contrary to popular belief Lorem Ipsum is not simply random text.</a></h3>
                        </li>
                        <li>
                            <h3 class="h3"><a href="#">Education to popular belief Lorem Ipsum is not simply</a></h3>
                        </li>
                        <li>
                            <h3 class="h3"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                        </li>
                        <li>
                            <h3 class="h3"><a href="#">Corporis repellendus perspiciatis reprehenderit.</a></h3>
                        </li>
                        <li>
                            <h3 class="h3"><a href="#">Deleniti consequatur laudantium sit aspernatur?</a></h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- News Ticker End -->