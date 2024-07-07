<!DOCTYPE html>
<html lang="en">

    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    @yield('head')
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqErWaXV0hbj0NHvxXPPn4UGIV_6C5oIQ8zBQo-RJjhlU-RqD9dB1O3auDoussV8D4_ZE&usqp=CAU">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-8l7+3pC3Rn88+qLZTzTnOMpOjJcbwXl0J8Dcy8F4yLQ8x1hVp7zgf8wJmF0t8kUSk/HaKog5vBAlMl8ST4uG/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-hexashop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">


    <style>
        /* style untuk video */
        .video-wrapper {
            position: relative;
            cursor: pointer;
        }
        .video-wrapper video {
            width: 100%;
            height: 100%;
        }
        .video-wrapper .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            color: white;
            display: none;
            z-index: 1;
        }
        .video-wrapper:hover .play-icon {
            display: block;
        }
        /* akhir style untuk video */


        /* style untuk show dan close deskripsi */
        .text-wrapper {
            position: relative;
            max-height: 260px;
            overflow: hidden;
            
        }
        .text-wrapper::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 10rem; 
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
        }
        .text-wrapper.show-more {
            max-height: none;
        }
        .text-wrapper.show-more::after {
            display: none;
            font-weight: bold;
        }
        /* akhir style untuk show dan close deskripsi */

    </style>

    </head>
    
    <body>
        
        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>  
        <!-- ***** Preloader End ***** -->
        
        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.html" class="logo">
                                <span class="text-dark px-2">Simplefied</span>
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <form class="d-flex border border-black rounded p-1" role="search">
                                    <input class="me-2 border border-0" type="search" placeholder="Temukan Kursus" aria-label="" style="outline: none;">
                                    <button class="btn bg-secondary" type="submit"><i class="fa text-white fa-search pb-0"></i></button>
                                </form> 
                                <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                                <li class="scroll-to-section"><a href="products.html">Jelajahi</a></li>
                                <li class="submenu">
                                    <a href="javascript:;">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-to-section"><a href="#explore" class="btn btn-outline-light py-0 text-dark">Masuk</a></li>
                                <li class="scroll-to-section"><a href="#ex" class="btn btn-dark py-0"><span class="text-white">Daftar</span></a></li>
                            </ul>        
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->
        
        @yield('content')
        
        <!-- ***** Footer Start ***** -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="first-item">
                            <div class="logo">
                                <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                            </div>
                            <ul>
                                <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                                <li><a href="#">hexashop@company.com</a></li>
                                <li><a href="#">010-020-0340</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h4>Shopping &amp; Categories</h4>
                        <ul>
                            <li><a href="#">Men’s Shopping</a></li>
                            <li><a href="#">Women’s Shopping</a></li>
                            <li><a href="#">Kid's Shopping</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Homepage</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h4>Help &amp; Information</h4>
                        <ul>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Tracking ID</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12">
                        <div class="under-footer">
                            <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                            
                            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        

        <!-- jQuery -->
        <script src="{{ asset ('assets/js/jquery-2.1.0.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset ('assets/js/popper.js') }}"></script>
        <script src="{{ asset ('assets/js/bootstrap.min.js') }}"></script>

        <!-- Plugins -->
        <script src="{{ asset ('assets/js/owl-carousel.js') }}"></script>
        <script src="{{ asset ('assets/js/accordions.js') }}"></script>
        <script src="{{ asset ('assets/js/datepicker.js') }}"></script>
        <script src="{{ asset ('assets/js/scrollreveal.min.js') }}"></script>
        <script src="{{ asset ('assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset ('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset ('assets/js/imgfix.min.js') }}"></script> 
        <script src="{{ asset ('assets/js/slick.js') }}"></script> 
        <script src="{{ asset ('assets/js/lightbox.js') }}"></script> 
        <script src="{{ asset ('assets/js/isotope.js') }}"></script> 
        
        <!-- Global Init -->
        <script src="{{ asset ('assets/js/custom.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            $(function() {
                var selectedClass = "";
                $("p").click(function(){
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                    $("#portfolio div").not("."+selectedClass).fadeOut();
                setTimeout(function() {
                    $("."+selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
                    
                });
            });
        </script>

        {{-- script untuk menampilkan video  --}}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const videoWrappers = document.querySelectorAll('.video-wrapper');
        
                videoWrappers.forEach(wrapper => {
                    const video = wrapper.querySelector('video');
                    video.pause(); // Ensure video is paused initially
                    wrapper.querySelector('.play-icon').style.display = 'block';
        
                    wrapper.addEventListener('click', function () {
                        // Stop video playback
                        video.pause();
        
                        // Open modal
                        const modal = new bootstrap.Modal(document.getElementById('videoModal'));
                        modal.show();
                    });
                });
        
                const modalElement = document.getElementById('videoModal');
                modalElement.addEventListener('shown.bs.modal', function () {
                    const modalVideo = modalElement.querySelector('video');
                    modalVideo.play();
                });
        
                modalElement.addEventListener('hidden.bs.modal', function () {
                    const modalVideo = modalElement.querySelector('video');
                    modalVideo.pause();
                });
            });
        </script>

        {{-- script untuk show deskripsi dan close --}}
        <script>
            function toggleText() {
                var textWrapper = document.querySelector('.text-wrapper');
                var showMoreBtn = document.querySelector('.btn-desc');

                if (textWrapper.classList.contains('show-more')) {
                    textWrapper.classList.remove('show-more');
                    showMoreBtn.textContent = 'Tampilkan Lebih Banyak';
                } else {
                    textWrapper.classList.add('show-more');
                    showMoreBtn.textContent = 'Tampilkan Lebih Sedikit';
                }
            }
        </script>
    </body>
</html>