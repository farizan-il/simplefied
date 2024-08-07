<!-- resources/views/simplefied/cart.blade.php -->
@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Keranjang Belanja</h1>
    @if ($keranjang->isEmpty())
        <p>Keranjang Anda kosong.</p>
    @else
        <ul>
            @foreach ($keranjang as $item)
                <li>
                    <img src="http://localhost/web-cms-simplefied/public/images/kursus-sampul/{{ $item->kegiatan->foto }}" alt="{{ $item->kegiatan->foto }}">
                    <h5>{{ $item->kegiatan->title }}</h5>
                    <p>Rp{{ number_format($item->kegiatan->harga, 0, ',', '.') }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
