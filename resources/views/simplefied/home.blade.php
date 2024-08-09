@extends('layouts.main')

@section('head')
    <title>{{ $title }}</title>

    <style>
        /* style agar logo bergerak */
        .logo-container {
            overflow: hidden;
            display: flex;
        }

        .logo-kemitraan {
            animation: infinite-scroll 7s linear infinite;
            display: flex;
            flex-shrink: 0;
            gap: 4rem;
            padding: 1rem;
        }

        .logo-kemitraan img {
            filter: grayscale(1);
        }

        .logo-kemitraan img:hover {
            filter: grayscale(0);
        }


        @keyframes infinite-scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-100%);
            }
        }

        /* style untuk card kursus */
        .card-animate {
            opacity: 0;
            transform: translateY(100px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .card-animate.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .card-animate:nth-child(1) {
            transition-delay: 0.1s;
        }

        .card-animate:nth-child(2) {
            transition-delay: 0.2s;
        }

        .card-animate:nth-child(3) {
            transition-delay: 0.3s;
        }

        /* style untuk image kategori */
        .zoom-container {
            overflow: hidden;
            position: relative;
            cursor: pointer;
        }

        .zoom-container img {
            transition: transform 0.5s ease;
        }

        .zoom-container:hover img {
            transform: scale(1.2);
        }
    </style>
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
                                    <a href="#">Temukan Kursus!</a>
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
                                                <p>Explorasi ke dalam dunia desain grafis yang modern dan kreatif. Temukan
                                                    potensi kreativitas Anda di sini!</p>
                                                <div class="main-border-button">
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
                                                <p>Terjun ke dalam pengembangan web yang dinamis dan canggih. Pelajari
                                                    teknik-teknik terbaru untuk menciptakan website yang inovatif!</p>
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
                                                <p>Pelajari lebih dalam mengenai teknologi informasi dan perangkat lunak.
                                                    Temukan keahlian yang dibutuhkan dalam industri ini!</p>
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
                                                <p>Temukan strategi bisnis yang efektif dan keterampilan manajemen yang
                                                    diperlukan untuk sukses di dunia bisnis.</p>
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

    <!-- ***** kursus Unggulan Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Pembelajar Terpopuler</h2>
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
                            @foreach ($kursus as $item)
                                @if ($item->kategori->namaKategori == 'Teknologi Informasi')
                                    <div class="item card-animate">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul style="font-size: 13px">
                                                    <li><a href="detail-course" class="shadow bg-body"><i
                                                                class="fa fa-heart"></i></a></li>
                                                    <li>
                                                        <a href="#"
                                                            onclick="event.preventDefault(); document.getElementById('add-to-cart-form-{{ $item->id }}').submit();"
                                                            class="shadow bg-body">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <form id="add-to-cart-form-{{ $item->id }}"
                                                        action="{{ route('add.to.cart', $item->id) }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                    </form>
                                                    <li><a href="{{ route('simplefied.edit', $item->id) }}"
                                                            class="shadow bg-body"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <img src="http://localhost/web-cms-simplefied/public/images/kursus-sampul/{{ $item->foto }}"
                                                alt="{{ $item->foto }}">
                                        </div>
                                        <div class="down-content">
                                            <h6><strong>{{ Str::limit($item->title, 50, '...') }}</strong></h6>
                                            <p class=" text-secondary">{{ $item->kategori->namaKategori }}</p>
                                            <ul class="stars-list d-flex mb-2 align-items-center"
                                                style="list-style: none; font-size: 12px; margin: 0; padding: 0;">
                                                <li class="d-flex align-items-end">
                                                    <p class="fw-semibold mr-1 mb-0">4,3</p>
                                                </li>
                                                <li class="d-flex align-items-end"><i
                                                        class="fa fa-star text-warning mr-1"></i></li>
                                                <li class="d-flex align-items-end"><i
                                                        class="fa fa-star text-warning mr-1"></i></li>
                                                <li class="d-flex align-items-end"><i
                                                        class="fa fa-star text-warning mr-1"></i></li>
                                                <li class="d-flex align-items-end"><i
                                                        class="fa fa-star text-warning mr-1"></i></li>
                                                <li class="d-flex align-items-end"><i
                                                        class="fa fa-star text-secondary mr-1"></i></li>
                                                @if ($item->transaksi_count > 0)
                                                    <li class="d-flex align-items-end">
                                                        <p class="text-secondary mb-0">({{ $item->transaksi_count }}
                                                            pendaftar)</p>
                                                    </li>
                                                @endif
                                            </ul>
                                            <div class="d-flex" style="font-size: 14px;">
                                                <h6 class="mr-2">
                                                    <strong>Rp{{ number_format($item->harga - ($item->harga * 50) / 100, 0, ',', '.') }}</strong>
                                                </h6>
                                                <h6 class="text-secondary" style="text-decoration: line-through">
                                                    Rp{{ number_format($item->harga, 0, ',', '.') }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** kursus Unggulan Ends ***** -->

    <!-- ***** topik unggulan Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kategori Terpopuler</h2>
                        <span>Kategori terpopuler berdasarkan jumlah pendaftar</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="zoom-container">
                                    <img src="https://s.udemycdn.com/home/top-categories/lohp-category-design-v2.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body p-2">
                                    <p class="card-title mb-1"><strong>Teknologi Informasi</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
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
                        <p>Akses tak terbatas ke lebih dari 26.000 kursus populer dari Simplefied, kapan saja, di mana saja.
                        </p>
                        <p>Koleksi kursus internasional dalam 14 bahasa dan sertifikasi terkemuka dalam teknologi dan
                            bisnis.</p>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>Simplefied menyediakan berbagai kursus berkualitas tinggi untuk meningkatkan kemampuan Anda
                                dalam dunia bisnis dan teknologi.</p>
                        </div>
                        <p>Daftar sekarang di Simplefied untuk mengakses berbagai kursus berkualitas tinggi dan meningkatkan
                            kemampuan Anda dalam bisnis dan teknologi.</p>
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
        <div class="container logo-container">
            <div class="row images align-items-center logo-kemitraan" id="logo">
                {{-- logo --}}
                <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/1cf37d98b6fd015d85b68f95a84163c4.svg?auto=format%2Ccompress&dpr=1&h=32"
                    alt="" style="width: 130px">
                <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/121b60a5c5b5b012a95626ce12b4265d.png?auto=format%2Ccompress&dpr=1&h=37"
                    alt="" style="width: 130px">
                <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/d266099ac753c0c93d7d291257fee686.png?auto=format%2Ccompress&dpr=1&h=37"
                    alt="" style="width: 130px">
                <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/25920b7c8bd5d2b415220fa76b7e9590.png?auto=format%2Ccompress&dpr=2&h=37"
                    alt="" style="width: 130px">
                <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/80cdb2567bfa0103fbbfb573784d479c.png?auto=format%2Ccompress&dpr=1&h=32"
                    alt="" style="width: 130px">
                <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/images/6c3c9b24dc786777991cb1c6b5d82933.png?auto=format%2Ccompress&dpr=1&h=32"
                    alt="" style="width: 130px; margin-right: 48px;">
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
                        <h2>Dengan Berlangganan Simplefy Plus, Anda Bisa Mendapatkan Diskon 30%.</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Nama Anda"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Email Anda" required="">
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
                        @foreach ($tentang as $item)
                            @if ($item->isread == 1)
                                <div class="col-6">
                                    <ul>
                                        <li>{{ $item->label }}:<br><span>{{ $item->data }}</span></li>
                                    </ul>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
@endsection


@section('script')
    <script>
        // script logo bergerak
        const logo = document.querySelector(".logo-kemitraan").cloneNode(true);
        document.querySelector(".logo-container").appendChild(logo);

        // script card kursus 
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card-animate');

            function checkVisibility() {
                const windowHeight = window.innerHeight;
                const windowTop = window.scrollY;

                cards.forEach((card, index) => {
                    const cardTop = card.getBoundingClientRect().top + window.scrollY;
                    if (windowTop + windowHeight > cardTop) {
                        card.classList.add('visible');
                        card.style.transitionDelay =
                        `${index * 0.1}s`; // Delay bertambah 0.1 detik untuk setiap card
                    }
                });
            }

            // Inisialisasi pada load
            checkVisibility();

            // Tambahkan event listener pada scroll
            window.addEventListener('scroll', checkVisibility);
        });
    </script>
@endsection
