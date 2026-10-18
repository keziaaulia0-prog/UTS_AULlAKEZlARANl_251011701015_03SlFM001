@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

{{-- Banner atas --}}
<section class="hero-kontak">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu kebutuhan sewa mobilmu. Berikut cara menghubungi kami.</p>
    </div>
</section>

{{-- Kartu kontak (menimpa bagian bawah banner) --}}
<section class="container kontak-wrap">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="kontak-card">
                <div class="kontak-ikon">📍</div>
                <h5>Alamat</h5>
                <p>Jl. Kenangan No. 123, Pondok Aren, Tangerang Selatan, Banten</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="kontak-card">
                <div class="kontak-ikon">📞</div>
                <h5>Telepon / WhatsApp</h5>
                <p class="kontak-info">0812-3456-7890</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="kontak-card">
                <div class="kontak-ikon">✉️</div>
                <h5>Email</h5>
                <p class="kontak-info">{{ $identitas['email'] }}</p>
            </div>
        </div>
    </div>
</section>

@endsection