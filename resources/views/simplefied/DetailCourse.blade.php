@extends('layouts.main')

@section('head')
    <title>Simplefied | Detail Kursus</title>
@endsection

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb  bg-dark">
                                <li class="breadcrumb-item "><a href="#" class="text-secondary">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Detail Kursus</li>
                            </ol>
                        </nav>
                        <h2>Build Responsive Real-World Websites with HTML and CSS</h2>
                        <span>Learn modern HTML5, CSS3 and web design by building a stunning website for your portfolio! Includes flexbox and CSS Grid</span>
                        <div class="down-content mt-3">
                            <p class="fs-6 text-light">Dibuat oleh Ilham Farizan</p>
                            <ul class="stars-list d-flex gap-3" style="list-style: none">
                                <li><p class="fs-6 fw-semibold text-light mr-1">4,3</p></li>
                                <li><i class="fa fa-star text-warning mr-1"></i></li>
                                <li><i class="fa fa-star text-warning mr-1"></i></li>
                                <li><i class="fa fa-star text-warning mr-1"></i></li>
                                <li><i class="fa fa-star text-warning mr-1"></i></li>
                                <li><i class="fa fa-star text-secondary mr-1"></i></li>
                                <li><p class="fs-6 text-white mr-1">(6,210 peserta)</p></li>
                            </ul>
                            <div class="d-flex mt-3">
                                <h6 class="fw-6 mr-3 text-white">Terakhir Diperbaharui 07/2024</h6>
                                <h6 class="fw-6 mr-3 text-white">Bahasa Indonesia</h6>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Kursus Detail Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="right-content">
                        <div class="border p-3">
                            <h4>Yang akan Anda Pelajari</h4>
                            <div class="d-flex mt-3">
                                <ul class="list-unstyled">
                                    <li class="p-1"><i class="fa fa-check-circle text-success mr-4"></i> Node Js</li>
                                    <li class="p-1"><i class="fa fa-check-circle text-success mr-4"></i> Node Js Dasar</li>
                                </ul>
                                <ul class="list-unstyled m-auto">
                                    <li class="p-1"><i class="fa fa-check-circle text-success mr-4"></i> Resful API</li>
                                    <li class="p-1"><i class="fa fa-check-circle text-success mr-4"></i> Node Js Standar Library</li>
                                </ul>
                            </div>
                        </div>

                        <div class="border p-3 mt-4">
                            <h5>Persyaratan Sebelum Menjalani Kursus</h5>
                            <div class="d-flex mt-3">
                                <ul class="list-unstyled">
                                    <li class="p-1"><i class="fa fa-check-circle text-secondary mr-4"></i> Menguasai Bahasa Pemrograman JavaScript</li>
                                    <li class="p-1"><i class="fa fa-check-circle text-secondary mr-4"></i> Mengetahui Fundamental HTML dan CSS</li>
                                </ul>
                                <ul class="list-unstyled m-auto">
                                    <li class="p-1"><i class="fa fa-check-circle text-secondary mr-4"></i> Bisa Menggunakan Git</li>
                                    <li class="p-1"><i class="fa fa-check-circle text-secondary mr-4"></i> Konsisten dan Fokus</li>
                                </ul>
                            </div>
                            <hr>
                            <p class="text-dark mt-0"><strong>Berbagai perusahaan terpopuler menawarkan kursus ini kepada karyawannya</strong><br>Kursus ini dipilih untuk koleksi kursus berperingkat teratas kami yang dipercaya oleh bisnis di seluruh </p>
                        </div>

                        <span class="price">$75.00</span>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
                        </div>
                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>No. of Orders</h6>
                            </div>
                            <div class="right-content">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                                </div>
                            </div>
                        </div>
                        <div class="total">
                            <h4>Total: $210.00</h4>
                            <div class="main-border-button"><a href="#">Add To Cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 shadow p-3 mt-0">
                    <div class="left-images">
                        <div class="video-wrapper embed-responsive embed-responsive-16by9 mb-3" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <video class="embed-responsive-item" src="assets/videos/video-play.mp4" muted></video>
                            <div class="play-icon">▶</div>
                        </div>
                        <div class="down-content">
                            <h3><strong>Rp650.000</strong></h3>
                            <div class="total mt-3">
                                <div class="main-border-button"><a href="#" style="font-size: 15px"><strong>Beli sekarang</strong></a></div>
                                <div class="main-border-button mt-2 bg-dark"><a href="#" style="font-size: 15px"><strong class="text-white">Tambahkan ke keranjang</strong></a></div>
                                <p class="refund fs-6 text-secondary mt-2">jaminan uang kembali 30 hari</p>
                            </div>
                            <div class="mt-4">
                                <h6 class="fw-6 mr-2"><strong>Kursi Ini Mencakup :</strong></h6>
                                <ul>
                                    <li class="p-1 ml-3"><span style="font-size: 13px; list-style: circle;">Video atas permintaan 1,5 jam</span></li>
                                    <li class="p-1 ml-3"><span style="font-size: 13px; list-style: circle;">Akses di perangkat seluler dan TV</span></li>
                                    <li class="p-1 ml-3"><span style="font-size: 13px; list-style: circle;">Akses penuh seumur hidup</span></li>
                                    <li class="p-1 ml-3"><span style="font-size: 13px; list-style: circle;">Sertifikat penyelesaian</span></li>
                                </ul>
                            </div>
                            <div class="kupon-course mt-4 mb-4">
                                <form class="d-flex border border-black justify-content-between rounded p-1" role="search">
                                    <input class="col-8 mr-2 me-2 border border-0" type="search" placeholder="Masukan Kupon" aria-label="" style="outline: none;">
                                    <button class="btn bg-secondary text-white" type="submit">Terapkan</button>
                                </form>
                            </div>
                            <hr>
                            <div class="mt-4">
                                <h6 class="fw-6 mr-2"><strong>Melatih 5 orang atau lebih?</strong></h6>
                                <p>Dapatkan akses untuk tim Anda ke 26.000+ kursus terbaik Simplefied, kapan saja dan di mana saja.</p>
                                <div class="total mt-1">
                                    <div class="main-border-button"><a href="#" style="font-size: 13px"><strong>Coba Simplefied Plus</strong></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kursus Detail Area Ends ***** -->

    <!-- Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" src="assets/videos/video-play.mp4" controls></video>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection