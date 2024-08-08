@extends('layouts.main')

@section('head')
    <title>{{ $title }}</title>
@endsection

@section('content')


<div class="container-xxl" style="margin-top: 90px">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mt-4 mb-5 border-bottom p-2 text-dark rounded" style="font-size: 1.6rem;">Pembelajaran Saya</h2>

            {{-- card --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Selamat Datang di Pembelajaran Anda!</h5>
                    <p class="card-text">Belajar sedikit demi sedikit, tetapi rutin. Penelitian membuktikan bahwa siswa yang rutin belajar setiap hari lebih mungkin mencapai sasarannya. Luangkan waktu untuk belajar dan dapatkan pengingat menggunakan penjadwal Anda.</p>
                  <a href="#" class="btn btn-dark mt-4 btn-sm">Atur waktu belajar</a>
                </div>
            </div>

            {{-- daftar kursus yang sudah dibeli --}}
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card">
                        <img src="https://muslimin.id/wp-content/uploads/2022/06/Kursus-Programming-Di-Depok.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with </p>
                            <div class="progress pb-0 mb-0" style="height: 4px; margin-top: 10px">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="p-0 m-0" style="font-size: 12px; color: black">25% selesai</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://muslimin.id/wp-content/uploads/2022/06/Kursus-Programming-Di-Depok.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with </p>
                            <div class="progress pb-0 mb-0" style="height: 4px; margin-top: 10px">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="p-0 m-0" style="font-size: 12px; color: black">25% selesai</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://muslimin.id/wp-content/uploads/2022/06/Kursus-Programming-Di-Depok.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with </p>
                            <div class="progress pb-0 mb-0" style="height: 4px; margin-top: 10px">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="p-0 m-0" style="font-size: 12px; color: black">25% selesai</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://muslimin.id/wp-content/uploads/2022/06/Kursus-Programming-Di-Depok.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with </p>
                            <div class="progress pb-0 mb-0" style="height: 4px; margin-top: 10px">
                                <div class="progress-bar" role="progressbar" aria-label="Example 1px high" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="p-0 m-0" style="font-size: 12px; color: black">25% selesai</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('script')
@endsection
