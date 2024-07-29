@extends('layouts.MainPayment')

@section('head')
    <title>Simplefied | Payment Kursus</title>
@endsection

@section('content-payment')
    <!-- ***** Kursus Detail Area Starts ***** -->
    <section class="section" id="product" style="margin-top: 145px">
        <div class="container">
            <div class="row">
                {{-- detail payment --}}
                <h4 class="fs-2"><strong>Checkout</strong></h4>
                <div class="col-lg-8">
                    <div class="right-content" style="width: 95%">
                        {{-- payment kursus --}}
                        <div class="mt-3">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            <span class="text-dark fs-6 mr-4 mt-0">
                                                <img src="https://www.udemy.com/staticx/udemy/images/v9/hpp-doku-bri-va.svg" alt="" width="40px" class="mr-3 border border-secondary rounded">
                                                <strong>Transfer Bank BRI</strong>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-floating  mb-3">
                                                <input type="Nama" class="form-control" id="floatingNama" placeholder="Nama">
                                                <label for="floatingNama">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Alamat Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="text-dark fs-6 mr-4 mt-0">
                                                <img src="https://www.udemy.com/staticx/udemy/images/v9/hpp-doku-mandiri-va.svg" alt="" width="40px" class="mr-3 border border-secondary rounded">
                                                <strong>Transfer Bank Mandiri</strong>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-floating  mb-3">
                                                <input type="Nama" class="form-control" id="floatingNama" placeholder="Nama">
                                                <label for="floatingNama">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Alamat Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="text-dark fs-6 mr-4 mt-0">
                                                <img src="https://www.udemy.com/staticx/udemy/images/v9/hpp-doku-bni-va.svg" alt="" width="40px" class="mr-3 border border-secondary rounded">
                                                <strong>Transfer Bank BNI</strong>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-floating  mb-3">
                                                <input type="Nama" class="form-control" id="floatingNama" placeholder="Nama">
                                                <label for="floatingNama">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Alamat Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span class="text-dark fs-6 mr-4 mt-0">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/archive/8/86/20210529064535%21Gopay_logo.svg/120px-Gopay_logo.svg.png" alt="" width="40px" height="25px" class="mr-3 border border-secondary rounded">
                                                <strong>Gopay</strong>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-floating  mb-3">
                                                <input type="Nama" class="form-control" id="floatingNama" placeholder="Nama">
                                                <label for="floatingNama">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Alamat Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <span class="text-dark fs-6 mr-4 mt-0">
                                                <img src="https://www.udemy.com/staticx/udemy/images/v9/hpp-doku-ovo.svg" alt="" width="40px" class="mr-3 border border-secondary rounded">
                                                <strong>OVO</strong>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-floating  mb-3">
                                                <input type="Nama" class="form-control" id="floatingNama" placeholder="Nama">
                                                <label for="floatingNama">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Alamat Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="fs-4 mt-5 mb-4"><strong>Detail Pesanan</strong></h4>
                    <div class="course-container row align-items-center mt-2">
                        <div class="row  justify-content-between">
                            @foreach($item as $k)
                                @if($k->id_kegiatan == $kegiatan->id)
                                <div class="col-1">
                                    <img src="http://localhost/web-cms-simplefied/public/images/kursus-sampul/{{ $kegiatan->foto }}"  class="course-image mr-2 rounded" width="40px">
                                </div>
                                <div class="col-9 d-flex">
                                    <div class="desc-course">
                                        <h6 class="mb-1"><strong>{{ $kegiatan->title }}</strong></h6>
                                        <h6 class="mb-1 text-secondary" style="font-size: 14px;">{{ \Illuminate\Support\Str::limit($kegiatan->subtitle, 60, '...') }}</h6>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <span class="course-price text-dark mt-0 p-0"><strong>Rp{{ number_format(($kegiatan->harga)-($kegiatan->harga*50/100), 0, ',', '.') }}</strong></span>
                                </div>
                                @break
                                @endif
                                
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- card pembelian kursus --}}
                <div class="col-lg-4 purchase-card shadow-sm  p-3 mt-0" style="max-height: 336px; position: sticky; top: 100px;">
                    <div class="left-images">
                        <div class="down-content">
                            <span class="fw-bold d-inline" style="font-size: 26px">Ringkasan</span>
                            <div class="total mt-3">
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-dark">Harga Asli:</span>
                                    <span class="text-dark"><strong>Rp{{ number_format(($kegiatan->harga), 0, ',', '.') }}</strong></span>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="text-dark">Diskon:</span>
                                    <span class="text-dark"><strong>Rp{{ number_format(($kegiatan->harga*50/100), 0, ',', '.') }}</strong></span>
                                </div>
                                <div class="d-flex justify-content-between border-top mt-4 border-secondary">
                                    <span class="text-dark"><strong>Total:</strong></span>
                                    <span class="text-dark"><strong>Rp{{ number_format(($kegiatan->harga)-($kegiatan->harga*50/100), 0, ',', '.') }}</strong></span>
                                </div>
                            </div>
                            <div class="payment mt-5 mb-3">
                                <span class="text-secondary"><small>Dengan menyelesaikan pembelian, Anda menyetujui <a href="">Persyaratan Layanan ini</a></small></span>
                                <button class="btn bg-dark mt-2 col-12 text-white" type="submit">Selesaikan Checkout</button>
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