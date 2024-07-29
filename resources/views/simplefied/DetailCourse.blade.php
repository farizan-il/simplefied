@extends('layouts.main')

@section('head')
    <title>Simplefied | Detail Kursus</title>
@endsection

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container-xxl">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb  bg-dark">
                                <li class="breadcrumb-item "><a href="#" class="text-secondary">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Detail Kursus</li>
                            </ol>
                        </nav>
                        <h2>{{ $kursus->title }}</h2>
                        <span>{{ $kursus->subtitle }}</span>
                        <div class="down-content mt-3">
                            <p class="fs-6 text-light">Dibuat oleh {{ $kursus->instruktur }}</p>
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
                {{-- detail kursus --}}
                <div class="col-lg-8">
                    <div class="right-content" style="width: 95%">
                        {{-- benefit kursus --}}
                        <div class="border p-3">
                            <h4>Yang akan Anda Pelajari</h4>
                            <div class="d-flex mt-3">
                                <ul class="list-unstyled">
                                    @foreach ($halKiri as $item)
                                        <li class="p-1"><i class="fa fa-check-circle text-success mr-4"></i> {{ trim($item) }}</li>
                                    @endforeach
                                </ul>
                                <ul class="list-unstyled m-auto">
                                    @foreach ($halKanan as $item)
                                        <li class="p-1"><i class="fa fa-check-circle text-success mr-4"></i> {{ trim($item) }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- syarat kursus --}}
                        <div class="border p-3 mt-4 mb-4">
                            <h5><strong>Persyaratan Sebelum Menjalani Kursus</strong></h5>
                            <div class="d-flex mt-3">
                                <ul class="list-unstyled">
                                    @foreach ($syarat as $k)
                                        <li class="p-1"><i class="fa fa-check-circle text-secondary mr-4"></i> {{ $k }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <hr>
                            <p class="text-dark mt-0"><strong>Berbagai perusahaan terpopuler menawarkan kursus ini kepada karyawannya</strong><br>Kursus ini dipilih untuk koleksi kursus berperingkat teratas kami yang dipercaya oleh bisnis di seluruh </p>
                        </div>

                        {{-- kontent kursus --}}
                        <h4 class="mb-1">Konten Kursus</h4>
                        <span class="mt-0">13 bagian • 294 pelajaran • 27j 22m total durasi</span>
                        <div class="mt-3">
                            <div class="accordion" id="accordionExample" style="width: 100%">
                                {{-- list acordion task kursus --}}
                                <div class="accordion" id="accordionExample">
                                    @foreach ($modul as $item)
                                        @if ($kursus->id == $item->id_kegiatan)
                                            <div class="accordion-item border" style="border-radius: 0">
                                                <h2 class="accordion-header" id="panelsStayOpen-heading{{ $item->id }}">
                                                <button class="accordion-button d-flex justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{ $item->id }}" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" style="border-radius: 0">
                                                    <span class="text-dark fs-6 mr-4 mt-0"><strong>{{ $item->judulModul }}</strong></span>
                                                    <span class="text-secondary mt-0">294 pelajaran • 27j 22m</span>
                                                </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapse{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                    <div class="accordion-body">
                                                        <ul class="list-unstyled">
                                                            @foreach ($submodul as $sub)
                                                                @if ($sub->id_modul == $item->id)
                                                                    <li class="p-1 d-flex justify-content-between mt-2" style="font-size: 14px">
                                                                        <span class="text-dark p-0 m-0">
                                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                                            {{ $sub->DetailModul }}
                                                                        </span>
                                                                        <span class="p-0 m-0">04:13</span>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="total">
                                <div class="main-border-button button-hover mt-2" id="showAllAccordionsBtn"><a style="font-size: 15px"><strong>Tampilkan Semuanya</strong></a></div>
                            </div>
                        </div>

                        {{-- deskripsi kursus --}}
                        <hr>
                        <h4 class="mt-4">Deskripsi Kursus</h4>
                        <div class="text-wrapper">
                            <div class="show-more-module--container--teP7C"><div class="show-more-module--content--Rw-xr show-more-module--with-gradient--f4HoJ" style="max-height:22.1rem;"><div tabindex="0"><div data-purpose="safely-set-inner-html:description:description"><p><strong>Selamat datang di program pelatihan data science dan machine learning dengan Python!</strong></p><p>Pelatihan ini diperuntukan untuk rekan - rekan ingin belajar data science dan machine learning dari sudut terapan dengan memanfaatkan Python.</p><p>Bagi rekan - rekan yang belum menguasai pemrograman Python, pelatihan juga memberikan konten pemrograman dasar untuk&nbsp; Python sehingga rekan - rekan dapat mengikuti pelatihan ini dengan baik. Bagi yang sudah bisa pemrograman Python, rekan - rekan dapat melanjutkan di topik berikutnya.</p><p>Seluruh konten didalam pelatihan ini dilaksanan secara step - by - step (langkah demi langkah) dan berurutan sehingga ini diharapkan semua peserta dapat dengan mudah mengikuti semua praktikum yang diberikan didalam pelatihan ini. Diharapkan semua peserta dapat mengikuti konten pelatihan ini secara berurutan ;).</p><p>Berikut ini konten yang akan diberikan pada pelatihan ini.</p><ul><li>Persiapan pelatihan</li><li>Pemrograman Python</li><li>Pengolahan dan Analisa Data - Numpy dan Pandas</li><li>Topik Khusus - Numpy dan Pandas - Database</li><li>Visualisasi Data dengan memanfaatkan library Matplotlib dan Seaborn</li><li>Topik Khusus Visualisasi Data Time Series</li><li>Dataset, Pra-Proses dan Pengurangan Dimensi Feature (Dimensionality Reduction)</li><li>Permasalahan dan Penyelesaian Kasus Linear Regression</li><li>Permasalahan dan Penyelesaian Kasus Klasifikasi (Classification)</li><li>Permasalahan dan Penyelesaian Kasus Kekelompokkan (Clustering)</li><li>Hyperparameter Tuning Untuk Model Machine Learning</li><li>Ensemble Methods</li><li>Kumpulan Studi Kasus</li></ul><p>Jika ada hal - hal yang ingin ditanyakan mengenai topik diatas, rekan - rekan dapat langsung ditulisnya di ruang diskusi pada web ini sehingga rekan-rekan lainnya dapat mengetahui dan ikut terlibat diskusinya.</p></div></div></div></div>
                        </div>
                        
                        <button class="btn btn-desc btn-outline-light mt-2 p-0 text-primary" onclick="toggleText()" style="font-size: 13px; font-weight: bold">Tampilkan Lebih Banyak</button>

                        <h4 class="mt-4">Peserta juga membeli</h4>
                        <div class="course-container row align-items-center">
                            <div class="row justify-content-between">
                                <div class="col-7 d-flex">
                                    <img src="assets/images/course4.png" alt="Course Image" class="course-image mr-2" width="50px">
                                    <div class="desc-course">
                                        <h6 class="mb-1"><strong>Pelatihan Data Science dan Machine Learning Dengan Python</strong></h6>
                                        <small class="text-muted"><strong class="text-success">8,5 total jam</strong> • Diperbarui 12/2023</small>
                                    </div>
                                </div>
                                <div class="col-5 d-flex justify-content-between">
                                    <div class="d-flex align-items-top mb-1 ">
                                        <span class="course-rating mr-3 text-dark mt-0">5.0 <i class="fa fa-star text-warning mr-1"></i></span>
                                        <span class="text-dark mt-0 mr-4"><i class="fa fa-user text-secondary"></i> 532</span>
                                        <div class="price-diskon">
                                            <span class="course-price text-dark mt-0 p-0"><strong>Rp300.000</strong></span>
                                            <small class="course-discounted-price">Rp200.000</small>
                                        </div>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa fa-heart fs-2 text-secondary "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-container row align-items-center">
                            <div class="row justify-content-between">
                                <div class="col-7 d-flex">
                                    <img src="assets/images/course4.png" alt="Course Image" class="course-image mr-2" width="50px">
                                    <div class="desc-course">
                                        <h6 class="mb-1"><strong>Pelatihan Data Science dan Machine Learning Dengan Python</strong></h6>
                                        <small class="text-muted"><strong class="text-success">8,5 total jam</strong> • Diperbarui 12/2023</small>
                                    </div>
                                </div>
                                <div class="col-5 d-flex justify-content-between">
                                    <div class="d-flex align-items-top mb-1 ">
                                        <span class="course-rating mr-3 text-dark mt-0">5.0 <i class="fa fa-star text-warning mr-1"></i></span>
                                        <span class="text-dark mt-0 mr-4"><i class="fa fa-user text-secondary"></i> 532</span>
                                        <div class="price-diskon">
                                            <span class="course-price text-dark mt-0 p-0"><strong>Rp129.000</strong></span>
                                            <small class="course-discounted-price">Rp449.000</small>
                                        </div>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa fa-heart fs-2 text-secondary "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-container row align-items-center">
                            <div class="row justify-content-between">
                                <div class="col-7 d-flex">
                                    <img src="assets/images/course4.png" alt="Course Image" class="course-image mr-2" width="50px">
                                    <div class="desc-course">
                                        <h6 class="mb-1"><strong>Pelatihan Data Science dan Machine Learning Dengan Python</strong></h6>
                                        <small class="text-muted"><strong class="text-success">8,5 total jam</strong> • Diperbarui 12/2023</small>
                                    </div>
                                </div>
                                <div class="col-5 d-flex justify-content-between">
                                    <div class="d-flex align-items-top mb-1 ">
                                        <span class="course-rating mr-3 text-dark mt-0">5.0 <i class="fa fa-star text-warning mr-1"></i></span>
                                        <span class="text-dark mt-0 mr-4"><i class="fa fa-user text-secondary"></i> 532</span>
                                        <div class="price-diskon">
                                            <span class="course-price text-dark mt-0 p-0"><strong>Rp129.000</strong></span>
                                            <small class="course-discounted-price">Rp449.000</small>
                                        </div>
                                    </div>
                                    <div class="favorite">
                                        <i class="fa fa-heart fs-2 text-secondary "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="total">
                            <div class="main-border-button button-hover mt-2" id="showAllAccordionsBtn"><a style="font-size: 15px"><strong>Tampilkan Semuanya</strong></a></div>
                        </div>
                    </div>
                </div>

                {{-- card pembelian kursus --}}
                <div class="col-lg-4 purchase-card shadow p-3 mt-0" style="max-height: 740px; position: sticky; top: 100px;">
                    <div class="left-images">
                        <div class="video-wrapper embed-responsive embed-responsive-16by9 mb-3" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <video class="embed-responsive-item" src="{{ asset('assets/videos/video-play.mp4') }}" muted></video>
                            <div class="play-icon">▶</div>
                        </div>
                        <div class="down-content">
                            <span class="fw-bold d-inline" style="font-size: 26px"><sup>Rp</sup>{{ number_format(($kursus->harga)-($kursus->harga*50/100), 0, ',', '.') }}</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px">Rp{{ number_format($kursus->harga, 0, ',', '.') }}</span>
                            <div class="total mt-3">
                                <div class="main-border-button bg-dark"><a href="#" style="font-size: 15px"><strong class="text-white">Tambahkan ke keranjang</strong></a></div>
                                <div class="main-border-button mt-2 button-hover">
                                    <a href="{{ route('simplefied.show', $kursus->id) }}" style="font-size: 15px"><strong>Beli sekarang</strong></a>
                                </div>
                                    <span class="text-dark"><strong>Garansi 30 hari</strong></span>
                                </div>
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
                            <div class="kupon-course mt-4 mb-3">
                                <div class="alert alert-warning alert-dismissible fade show " role="alert" style="font-size: 12px">
                                    <strong>FULLBEASISWA</strong> Kupon Simplefied
                                    <button type="button" class="btn-close pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <form class="d-flex border border-black justify-content-between rounded p-1" role="search">
                                    <input class="col-8 mr-2 me-2 border border-0" type="search" placeholder="Masukan Kupon" aria-label="" style="outline: none;">
                                    <button class="btn bg-secondary text-white" type="submit">Terapkan</button>
                                </form>
                            </div>
                            <hr>
                            {{-- <div class="mt-4">
                                <h6 class="fw-6 mr-2"><strong>Melatih 5 orang atau lebih?</strong></h6>
                                <p>Dapatkan akses untuk tim Anda ke 26.000+ kursus terbaik Simplefied, kapan saja dan di mana saja.</p>
                                <div class="total mt-1">
                                    <div class="main-border-button button-hover"><a href="#" style="font-size: 13px"><strong>Coba Simplefied Plus</strong></a></div>
                                </div>
                            </div> --}}
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