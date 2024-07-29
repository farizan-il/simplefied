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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-hexashop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
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
                                <img src="assets/images/white-logo-nav.png" alt="">
                            </a>
                            <!-- ***** Logo End ***** -->

                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="">Batal</a></li>
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

        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-5">
                        <img src="https://frontends.udemycdn.com/components/auth/desktop-illustration-step-1-x1.webp"
                            class="img-fluid" alt="Phone image">
                    </div>

                    <div class="col-md-7 col-lg-5 col-xl-6 offset-xl-1 ">
                        @if (session()->has('error'))
                            <div class="alert mb-4 alert-success alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger mb-4 alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <form class="row g-3" action="/verifikasi" method="POST">
                                @csrf
                            
                                <div class="col-12">
                                    <label for="inputVerifikasi" class="form-label" style="font-size: 14px">Masukan Token Verifikasi</label>
                                    <input type="text" class="form-control" id="inputVerifikasi" name="verifikasi" placeholder="Masukan Token">
                                </div>
                            
                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark btn-md btn-block">Verifikasi</button>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <a href="#" class="text-dark mt-3" style="font-size: 14px">Kirim Ulang</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

    </body>
</html>