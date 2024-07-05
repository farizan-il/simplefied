@extends('layouts.main')

@section('head')
    Simplefied | Home
@endsection

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We Are Simplefied</h4>
                                <span>Temukan beragam kursus online yang komprehensif dan menarik</span>
                                <div class="main-border-button">
                                    <a href="#">Daftar Sekarang!</a>
                                </div>
                            </div>
                            <img src="assets/images/left-banner.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Desain Grafis</h4>
                                            <span>Temukan kreativitas dalam desain grafis modern</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Desain Grafis</h4>
                                                <p>Explorasi ke dalam dunia desain grafis yang modern dan kreatif. Temukan potensi kreativitas Anda di sini!</p>                                                <div class="main-border-button">
                                                    <a href="#">Temukan Lebih Lanjut</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-01.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Pengembangan</h4>
                                            <span>Explorasi dalam dunia pengembangan web yang dinamis</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Pengembangan</h4>
                                                <p>Terjun ke dalam pengembangan web yang dinamis dan canggih. Pelajari teknik-teknik terbaru untuk menciptakan website yang inovatif!</p>
                                                <div class="main-border-button">
                                                    <a href="#">Temukan Lebih Lanjut</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-02.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>TI dan Perangkat Lunak</h4>
                                            <span>Eksplorasi dalam dunia teknologi informasi dan perangkat lunak</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>TI dan Perangkat Lunak</h4>
                                                <p>Pelajari lebih dalam mengenai teknologi informasi dan perangkat lunak. Temukan keahlian yang dibutuhkan dalam industri ini!</p>
                                                <div class="main-border-button">
                                                    <a href="#">Temukan Lebih Lanjut</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-03.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Bisnis</h4>
                                            <span>Pelajari strategi dan keterampilan bisnis yang efektif</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Bisnis</h4>
                                                <p>Temukan strategi bisnis yang efektif dan keterampilan manajemen yang diperlukan untuk sukses di dunia bisnis.</p>
                                                <div class="main-border-button">
                                                    <a href="#">Temukan Lebih Lanjut</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-04.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Tepok Unggulan Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Pengembangan</h2>
                        <span>Topik unggulan berdasarkan kategori</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/course4.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h5><strong>Mempelajari Machine Learning dengan Python</strong></h5>
                                    <p class="fs-6 text-secondary">Kode by Hacktiv8</p>
                                    <ul class="stars-list d-flex gap-3">
                                        <li><p class="fs-6 fw-semibold mr-1">4,3</p></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-secondary mr-1"></i></li>
                                        <li><p class="fs-6 text-secondary mr-1">(16,210)</p></li> //jumlah pendaftar
                                    </ul>
                                    <div class="d-flex mt-2">
                                        <h6 class="fw-6 mr-2"><strong>Rp620.000</strong></h6>
                                        <h6 class="fw-6 text-secondary" style="text-decoration: line-through">Rp920.000</h6>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/course1.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h5><strong>Pengenalan Pembelajaran Mesin (Intro to Machine Learning)</strong></h5>
                                    <p class="fs-6 text-secondary">Ilham Farizan</p>
                                    <ul class="stars-list d-flex gap-3">
                                        <li><p class="fs-6 fw-semibold mr-1">4,3</p></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-secondary mr-1"></i></li>
                                        <li><p class="fs-6 text-secondary mr-1">(26,210)</p></li>
                                    </ul>
                                    <div class="d-flex mt-2">
                                        <h6 class="fw-6 mr-2"><strong>Rp720.000</strong></h6>
                                        <h6 class="fw-6 text-secondary" style="text-decoration: line-through">Rp1.200.000</h6>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/course2.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h5><strong>Machine Learning A-Z: AI, Python & R + ChatGPT Prize [2024]</strong></h5>
                                    <p class="fs-6 text-secondary">Ilham Farizan</p>
                                    <ul class="stars-list d-flex gap-3">
                                        <li><p class="fs-6 fw-semibold mr-1">5</p></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><p class="fs-6 text-secondary mr-1">(26,210)</p></li>
                                    </ul>
                                    <div class="d-flex mt-2">
                                        <h6 class="fw-6 mr-2"><strong>Rp520.000</strong></h6>
                                        <h6 class="fw-6 text-secondary" style="text-decoration: line-through">Rp890.000</h6>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/course3.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h5><strong>Complete Machine Learning with R Studio - ML for 2024</strong></h5>
                                    <p class="fs-6 text-secondary">Ilham Farizan</p>
                                    <ul class="stars-list d-flex gap-3">
                                        <li><p class="fs-6 fw-semibold mr-1">5</p></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><p class="fs-6 text-secondary mr-1">(6,210)</p></li>
                                    </ul>
                                    <div class="d-flex mt-2">
                                        <h6 class="fw-6 mr-2"><strong>Rp420.000</strong></h6>
                                        <h6 class="fw-6 text-secondary" style="text-decoration: line-through">Rp790.000</h6>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Tepok Unggulan Ends ***** -->

    <!-- ***** topik unggulan Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Desain Grafis</h2>
                        <span>Topik unggulan berdasarkan kategori</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/course5.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h5><strong>Animasi Fundamental terlengkap bagi Pemula</strong></h5>
                                    <p class="fs-6 text-secondary">Ilham Farizan</p>
                                    <ul class="stars-list d-flex gap-3">
                                        <li><p class="fs-6 fw-semibold mr-1">4,3</p></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-secondary mr-1"></i></li>
                                        <li><p class="fs-6 text-secondary mr-1">(6,210)</p></li>
                                    </ul>
                                    <div class="d-flex mt-2">
                                        <h6 class="fw-6 mr-2"><strong>Rp720.000</strong></h6>
                                        <h6 class="fw-6 text-secondary" style="text-decoration: line-through">Rp1.200.000</h6>
                                    </div>  
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/course6.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h5><strong>Animasi Fundamental terlengkap bagi Pemula</strong></h5>
                                    <p class="fs-6 text-secondary">Ilham Farizan</p>
                                    <ul class="stars-list d-flex gap-3">
                                        <li><p class="fs-6 fw-semibold mr-1">4,3</p></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-secondary mr-1"></i></li>
                                        <li><p class="fs-6 text-secondary mr-1">(6,210)</p></li>
                                    </ul>
                                    <div class="d-flex mt-2">
                                        <h6 class="fw-6 mr-2"><strong>Rp720.000</strong></h6>
                                        <h6 class="fw-6 text-secondary" style="text-decoration: line-through">Rp1.200.000</h6>
                                    </div> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/course7.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h5><strong>Belajar Premiere Pro CC 2019 untuk Pemula</strong></h5>
                                    <p class="fs-6 text-secondary">Ilham Farizan</p>
                                    <ul class="stars-list d-flex gap-3">
                                        <li><p class="fs-6 fw-semibold mr-1">4,3</p></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-secondary mr-1"></i></li>
                                        <li><p class="fs-6 text-secondary mr-1">(6,210)</p></li>
                                    </ul>
                                    <div class="d-flex mt-2">
                                        <h6 class="fw-6 mr-2"><strong>Rp920.000</strong></h6>
                                        <h6 class="fw-6 text-secondary" style="text-decoration: line-through">Rp1.200.000</h6>
                                    </div> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/course8.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h5><strong>Belajar Premiere Pro CC 2019 untuk Pemula</strong></h5>
                                    <p class="fs-6 text-secondary">Ilham Farizan</p>
                                    <ul class="stars-list d-flex gap-3">
                                        <li><p class="fs-6 fw-semibold mr-1">4,3</p></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-warning mr-1"></i></li>
                                        <li><i class="fa fa-star text-secondary mr-1"></i></li>
                                        <li><p class="fs-6 text-secondary mr-1">(6,210)</p></li>
                                    </ul>
                                    <div class="d-flex mt-2">
                                        <h6 class="fw-6 mr-2"><strong>Rp620.000</strong></h6>
                                        <h6 class="fw-6 text-secondary" style="text-decoration: line-through">Rp900.000</h6>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** topik unggulan Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Tingkatkan Kemampuan Tim Anda dengan Simplefied Business</h2>
                        <p>Akses tak terbatas ke lebih dari 26.000 kursus populer dari Simplefied, kapan saja, di mana saja.</p>
                        <p>Koleksi kursus internasional dalam 14 bahasa dan sertifikasi terkemuka dalam teknologi dan bisnis.</p>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>Simplefied menyediakan berbagai kursus berkualitas tinggi untuk meningkatkan kemampuan Anda dalam dunia bisnis dan teknologi.</p>
                        </div>
                        <p>Daftar sekarang di Simplefied untuk mengakses berbagai kursus berkualitas tinggi dan meningkatkan kemampuan Anda dalam bisnis dan teknologi.</p>
                        <div class="main-border-button">
                            <a href="products.html">Temukan Lebih Banyak</a>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Finansial Analisis</h4>
                                    <span>Topik Terbaru</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="assets/images/explore-image-01.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="assets/images/explore-image-02.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Cyber Security</h4>
                                    <span>Topik Terbaru</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Berinvestasilah untuk karier Anda dengan Simplefied Plus</h2>
                        <span>Dipercaya oleh lebih dari 15.000 perusahaan dan jutaan pembelajar di seluruh dunia</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images align-items-center">
                <div class="col-2">
                    <div class="thumb">
                        <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/1cf37d98b6fd015d85b68f95a84163c4.svg?auto=format%2Ccompress&dpr=1&h=32" alt="" style="width: 130px">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/121b60a5c5b5b012a95626ce12b4265d.png?auto=format%2Ccompress&dpr=1&h=37" alt="" style="width: 130px">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/d266099ac753c0c93d7d291257fee686.png?auto=format%2Ccompress&dpr=1&h=37" alt="" style="width: 130px">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/25920b7c8bd5d2b415220fa76b7e9590.png?auto=format%2Ccompress&dpr=2&h=37" alt="" style="width: 130px">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/80cdb2567bfa0103fbbfb573784d479c.png?auto=format%2Ccompress&dpr=1&h=32" alt="" style="width: 130px">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/6c3c9b24dc786777991cb1c6b5d82933.png?auto=format%2Ccompress&dpr=1&h=32" alt="" style="width: 130px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i
                                            class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Office Location:<br><span>North Miami Beach</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>info@company.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a
                                            href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
@endsection