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
                                @foreach ($payment as $pay)    
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $pay->id }}"
                                                aria-expanded="true" aria-controls="collapseTwo">
                                                <span class="text-dark fs-6 mr-4 mt-0">
                                                    <img src="{{ $pay->icon }}" alt="" width="40px" class="mr-3 border border-secondary rounded">
                                                    <strong>Transfer {{ $pay->namaPayment }}</strong>
                                                </span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne{{ $pay->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            {{-- isi form terlebih dahulu --}}
                                            <div class="accordion-body" id="formSection">
                                                <form id="paymentForm">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingNama" placeholder="Nama" value="{{ Auth::user()->id }}" required>
                                                        <input type="text" class="form-control" id="floatingNama" placeholder="Nama" value="{{ $pay->id }} - payment id" required>
                                                        <input type="text" class="form-control" id="floatingNama" placeholder="Nama" value="{{ $kegiatan->id }} - kegiatan id" required>
                                                        <input type="text" class="form-control" id="floatingNama" placeholder="Nama" value="{{ $kegiatan->title }}" required>
                                                        <input type="text" class="form-control" id="floatingNama" placeholder="Nama" value="{{ $kegiatan->namaKategori }}" required>
                                                        <input type="text" class="form-control" id="floatingNama" placeholder="Nama" value="{{ $kegiatan->harga }}" required>
                                                        <input type="text" class="form-control" id="floatingNama" placeholder="Nama" value="pending" required>
                                                        <label for="floatingNama">Nama</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingNama" placeholder="Nama" required>
                                                        <label for="floatingNama">Nama Lengkap</label>
                                                    </div>
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                                        <label for="floatingInput">Alamat Email</label>
                                                        <div id="emailHelp" class="form-text">Modul kursus akan dikirim ke alamat email tersebut</div>
                                                    </div>
                                                    <button class="btn bg-dark mt-2 col-3 text-white mt-4" type="submit">Submit</button>
                                                </form>
                                            </div>
                                        
                                            {{-- informasi pembayaran --}}
                                            <div class="accordion-body" id="paymentInfo" style="display: none;">
                                                <p class="text-dark"><strong class="text-danger">Catatan: </strong>Jika anda telah selesai membayar, <strong>upload bukti pembayaran</strong> di form yang sudah tersedia. Selesaikan pembayaran Anda dalam waktu 48 jam. Setelah pembayaran disetujui, butuh waktu hingga 30 menit untuk mengirimkan kursus ke akun Simplefied Anda.</p>
                                                <!-- File Upload Section -->
                                                <div class="mt-5">
                                                    <h6 class="fw-bold">Upload Bukti Pembayaran</h6>
                                                    <form action="/upload_payment_proof" method="post" enctype="multipart/form-data" class="d-flex align-items-center mt-2">
                                                        <div class="flex-grow-1">
                                                            <input class="form-control me-2" type="file" id="formFile" name="paymentProof">
                                                        </div>
                                                        <button type="submit" class="btn btn-secondary">Kirim</button>
                                                    </form>
                                                </div>
                                                <div class="card border-primary mt-4">
                                                    <div class="card-body">
                                                        <p class="card-title text-dark mt-0">Terima kasih atas pembelian Anda. Silakan gunakan informasi berikut untuk menyelesaikan pembayaran.</p>
                                                        <p class="card-text text-primary fs-6"><strong>Rp 225.000,00</strong></p>
                                                        <div class="mb-2 mt-3">
                                                            <strong class="text-dark">Referensi Pembayaran:</strong>
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="form-control bg-light fw-bold" value="{{ $pay->noRef}}" readonly>
                                                                <button class="btn btn-outline-secondary" type="button" onclick="copyText('1236227400635225')">Salin</button>
                                                            </div>
                                                        </div>
                                                        <p class="text-dark">Tanggal Kedaluwarsa: <strong> 03/08/2024</strong></p>
                                                        <p class="text-dark mt-0">Nama Pembeli: <strong> {{ Auth::user()->username }} </strong></p>
                                                        <p class="text-dark mt-0">Merchant: <strong> Simplefied </strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                        
                                    </div>
                                @endforeach
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


@section('script')
    <script>
        function copyText(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('Referensi Pembayaran disalin ke clipboard');
            }, function(err) {
                console.error('Gagal menyalin teks: ', err);
            });
        }
    </script>

    {{-- script untuk payment informasi agar terlihat setelah mengisi form --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('paymentForm');
            const formSection = document.getElementById('formSection');
            const paymentInfo = document.getElementById('paymentInfo');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                // Hide the form section
                formSection.style.display = 'none';

                // Show the payment information section
                paymentInfo.style.display = 'block';
            });
        });
    
        function copyText(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('Teks telah disalin!');
            }, function(err) {
                console.error('Gagal menyalin teks: ', err);
            });
        }
    </script>
    
@endsection