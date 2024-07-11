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
                {{-- detail kursus --}}
                <div class="col-lg-8">
                    <div class="right-content" style="width: 95%">
                        {{-- benefit kursus --}}
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

                        {{-- syarat kursus --}}
                        <div class="border p-3 mt-4 mb-4">
                            <h5><strong>Persyaratan Sebelum Menjalani Kursus</strong></h5>
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

                        {{-- kontent kursus --}}
                        <h4 class="mb-1">Konten Kursus</h4>
                        <span class="mt-0">13 bagian • 294 pelajaran • 27j 22m total durasi</span>
                        <div class="mt-3">
                            <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%">
                                {{-- list acordion task kursus --}}
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item border" style="border-radius: 0">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button d-flex justify-content-between mt-0" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne" style="border-radius: 0">
                                                <span class="text-dark fs-6 mr-4 mt-0"><strong>NodeJS Dasar</strong></span>
                                                <span class="text-secondary mt-0">294 pelajaran • 27j 22m</span>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li class="p-1 d-flex justify-content-between mt-2" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border" style="border-radius: 0">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button class="accordion-button d-flex justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" style="border-radius: 0">
                                            <span class="text-dark fs-6 mr-4 mt-0"><strong>NodeJS Dasar</strong></span>
                                            <span class="text-secondary mt-0">294 pelajaran • 27j 22m</span>
                                        </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li class="p-1 d-flex justify-content-between mt-2" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border" style="border-radius: 0">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button d-flex justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree" style="border-radius: 0">
                                            <span class="text-dark fs-6 mr-4 mt-0"><strong>NodeJS Dasar</strong></span>
                                            <span class="text-secondary mt-0">294 pelajaran • 27j 22m</span>
                                        </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <div class="accordion-body">
                                                    <ul class="list-unstyled">
                                                        <li class="p-1 d-flex justify-content-between mt-2" style="font-size: 14px">
                                                            <span class="text-dark p-0 m-0">
                                                                <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                                Menguasai Bahasa Pemrograman JavaScript
                                                            </span>
                                                            <span class="p-0 m-0">04:13</span>
                                                        </li>
                                                        
                                                        <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                            <span class="text-dark p-0 m-0">
                                                                <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                                Mengetahui Fundamental HTML dan CSS
                                                            </span>
                                                            <span class="p-0 m-0">04:13</span>
                                                        </li>
                                                        
                                                        <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                            <span class="text-dark p-0 m-0">
                                                                <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                                Menguasai Bahasa Pemrograman JavaScript
                                                            </span>
                                                            <span class="p-0 m-0">04:13</span>
                                                        </li>
                                                        
                                                        <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                            <span class="text-dark p-0 m-0">
                                                                <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                                Mengetahui Fundamental HTML dan CSS
                                                            </span>
                                                            <span class="p-0 m-0">04:13</span>
                                                        </li>
                                                        
                                                        <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                            <span class="text-dark p-0 m-0">
                                                                <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                                Menguasai Bahasa Pemrograman JavaScript
                                                            </span>
                                                            <span class="p-0 m-0">04:13</span>
                                                        </li>
                                                        
                                                        <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                            <span class="text-dark p-0 m-0">
                                                                <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                                Mengetahui Fundamental HTML dan CSS
                                                            </span>
                                                            <span class="p-0 m-0">04:13</span>
                                                        </li>
                                                        
                                                        <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                            <span class="text-dark p-0 m-0">
                                                                <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                                Menguasai Bahasa Pemrograman JavaScript
                                                            </span>
                                                            <span class="p-0 m-0">04:13</span>
                                                        </li>
                                                        
                                                        <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                            <span class="text-dark p-0 m-0">
                                                                <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                                Mengetahui Fundamental HTML dan CSS
                                                            </span>
                                                            <span class="p-0 m-0">04:13</span>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item border hidden-accordion" style="border-radius: 0">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                        <button class="accordion-button d-flex justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour" style="border-radius: 0">
                                            <span class="text-dark fs-6 mr-4 mt-0"><strong>NodeJS Dasar</strong></span>
                                            <span class="text-secondary mt-0">294 pelajaran • 27j 22m</span>
                                        </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li class="p-1 d-flex justify-content-between mt-2" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border hidden-accordion" style="border-radius: 0">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                        <button class="accordion-button d-flex justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive" style="border-radius: 0">
                                            <span class="text-dark fs-6 mr-4 mt-0"><strong>NodeJS Dasar</strong></span>
                                            <span class="text-secondary mt-0">294 pelajaran • 27j 22m</span>
                                        </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li class="p-1 d-flex justify-content-between mt-2" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border hidden-accordion" style="border-radius: 0">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                            <button class="accordion-button d-flex justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix" style="border-radius: 0">
                                                <span class="text-dark fs-6 mr-4 mt-0"><strong>NodeJS Dasar</strong></span>
                                                <span class="text-secondary mt-0">294 pelajaran • 27j 22m</span>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li class="p-1 d-flex justify-content-between mt-2" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border hidden-accordion" style="border-radius: 0">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                            <button class="accordion-button d-flex justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven" style="border-radius: 0">
                                                <span class="text-dark fs-6 mr-4 mt-0"><strong>NodeJS Dasar</strong></span>
                                                <span class="text-secondary mt-0">294 pelajaran • 27j 22m</span>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li class="p-1 d-flex justify-content-between mt-2" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 d-flex justify-content-between mt-3" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Menguasai Bahasa Pemrograman JavaScript
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                    <li class="p-1 mt-3 d-flex justify-content-between" style="font-size: 14px">
                                                        <span class="text-dark p-0 m-0">
                                                            <i class="fa fa-file-video-o text-dark mr-3"></i> 
                                                            Mengetahui Fundamental HTML dan CSS
                                                        </span>
                                                        <span class="p-0 m-0">04:13</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                            <p class="text-content text-white p-0">
                                <span class="text-dark fw-bold">Jadilah programmer Python dan pelajari salah satu skills dan bahasa pemrograman yang paling dicari di seluruh dunia!</span>
                                <span class="text-dark fw-bold">#UPDATE JULI 2020: Pembahasan tentang NUMPY telah ditambahkan!</span>
                                <span class="text-dark">
                                    Video ini adalah online course yang <strong>paling lengkap, to-the point, dan mudah dipahami</strong> untuk <strong>bahasa pemrograman Python di Simplefied!</strong> Tidak peduli apakah Anda <strong>belum pernah mempelajari bahasa pemrograman</strong> apapun sebelumnya, atau sudah mengetahui berbagai macam sintaks dasar, atau ingin mempelajari  fitur-fitur canggih Python, video course ini dirancang tentu saja untuk Anda! Dalam kursus ini, <strong>kami akan mengajari Anda pemrograman Python secara efektif!</strong>
                                    <br>Dilengkapi dengan berjam-jam video course, latihan coding, dan kuis, kursus komprehensif ini tidak membutuhkan pengalaman apapun! Bahkan Anda bisa mengoperasikannya menggunakan MS Windows.
                                    <br>Video course ini akan <strong>mengajarkan Anda Python secara praktis</strong> dengan setiap bab dilengkapi screencast yang mengajarkan sintaks, fungsi, dan aturan pemrograman  lengkap dan latihan-latihan yang menarik! Tunggu apa lagi, ayo belajarlah dengan cara  yang terbaik untuk Anda!
                                    Kami akan memulainya dengan pembahasan kode sederhana Python. Lantas, kami akan membantu Anda menginstal Python di komputer Anda.
                                </span>
                            </p>
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
                            <video class="embed-responsive-item" src="assets/videos/video-play.mp4" muted></video>
                            <div class="play-icon">▶</div>
                        </div>
                        <div class="down-content">
                            <span class="fw-bold d-inline" style="font-size: 26px"><sup>Rp</sup>529.000</span>
                            <span class="text-secondary" style="text-decoration: line-through; font-size: 14px">Rp1.200.000</span>
                            <div class="total mt-3">
                                <div class="main-border-button bg-dark"><a href="#" style="font-size: 15px"><strong class="text-white">Tambahkan ke keranjang</strong></a></div>
                                <div class="main-border-button mt-2 button-hover"><a href="/payment-course" style="font-size: 15px"><strong>Beli sekarang</strong></a></div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-dark">Garansi Uang Kembali</span>
                                    <span class="text-dark"><strong>30 hari</strong></span>
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