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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
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

    </style>



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
            <div class="container-xxl">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.html" class="logo">
                                <img src="{{ asset('assets/images/white-logo-nav.png') }}" alt="Logo">
                            </a>
                            <!-- ***** Logo End ***** -->

                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="javascript:history.back()">Batal</a></li>
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
        
        @yield('content-payment')

        <footer class="mb-4 bg-white">

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

        @yield('script')
    </body>
</html>