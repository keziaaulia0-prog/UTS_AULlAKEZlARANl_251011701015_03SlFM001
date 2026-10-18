@extends('layouts.app')

@section('title', 'Beranda')

@section('content')


<section class="hero-motors">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="welcome-kecil">Welcome To</div>
                <h1>Sistem Rental Mobil</h1>
                <p class="lead mb-4">Sewa mobil harian dengan {{ $total }} unit pilihan, transmisi manual maupun automatic.</p>
                <div class="identitas mb-4">
                    <strong>{{ $identitas['nim'] }}</strong><br>
                    {{ $identitas['nama'] }}<br>
                    {{ $identitas['email'] }}<br>
                    Prodi {{ $identitas['prodi'] }}<br>
                    Dosen: {{ strtoupper($identitas['dosen']) }}
                </div>
                <div>
                    <a href="{{ route('cars.index') }}" class="btn btn-oranye btn-lg me-2">Lihat Daftar Mobil</a>
                    <a href="{{ route('kontak') }}" class="btn btn-outline-light btn-lg">Hubungi Kami</a>
                </div>
            </div>
            <div class="col-lg-6 position-relative text-center">
    <img src="{{ asset('assets/images/brio-hero.png') }}" alt="Mobil rental" class="hero-mobil">
    <div class="lingkaran-harga">
        <small>Mulai dari</small>
        <strong>Rp {{ number_format($specials->first()->rent_price ?? 0, 0, ',', '.') }}</strong>
        <small>/ hari</small>
    </div>
</div>
            </div>
        </div>
    </div>
</section>


@php
    $tabs = [
        'semua'     => ['Semua', $cars],
        'automatic' => ['Automatic', $cars->where('transmission', 'Automatic')],
        'manual'    => ['Manual', $cars->where('transmission', 'Manual')],
    ];
@endphp
<section class="section-gelap">
    <div class="container">
        <h2 class="judul-gelap mb-4">SELAMAT DATANG DI <span>AULIA RENT CAR</span></h2>

        <ul class="nav tabs-motors mb-4" role="tablist">
            @foreach ($tabs as $id => $tab)
                <li class="nav-item">
                    <button class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="pill"
                            data-bs-target="#tab-{{ $id }}" type="button">{{ $tab[0] }}</button>
                </li>
            @endforeach
        </ul>

        <div class="tab-content">
            @foreach ($tabs as $id => $tab)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $id }}">
                    <div class="row g-3">
                        @forelse ($tab[1] as $car)
                            <div class="col-6 col-lg-3">
                                <a href="{{ route('cars.show', $car) }}" class="mini-card">
                                    <div class="mini-img">
                                        <img src="{{ asset($car->image) }}" alt="{{ $car->full_name }}">
                                        <span class="label-harga">Rp {{ number_format($car->rent_price, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="mini-body">{{ strtoupper($car->full_name) }}</div>
                                    <div class="mini-foot">
                                        <span>{{ $car->year }}</span>
                                        <span>{{ $car->transmission }}</span>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p class="text-center text-muted">Belum ada mobil.</p>
                        @endforelse
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('cars.index') }}" class="btn btn-biru px-5">LIHAT SEMUA</a>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="cta-box cta-kuning">
               
                <div>
                    <h4>Sedang mencari mobil?</h4>
                    <p>Lihat seluruh pilihan mobil kami, lengkap dengan harga dan transmisi.</p>
                    <a href="{{ route('cars.index') }}" class="btn btn-dark btn-sm">Cari Mobil</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="cta-box cta-merah">
            
                <div>
                    <h4>Ada pertanyaan?</h4>
                    <p>Hubungi kami untuk informasi ketersediaan unit dan pemesanan.</p>
                    <a href="{{ route('kontak') }}" class="btn btn-dark btn-sm">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PROMO --}}
<section class="section-gelap">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <h2 class="judul-gelap mb-0">PROMO <span>HEMAT</span></h2>
            <a href="{{ route('cars.index') }}" class="link-terang">Semua mobil &rarr;</a>
        </div>
        <div class="row g-4">
            @foreach ($specials as $car)
                <div class="col-md-4">
                    <div class="promo-card">
                        <img src="{{ asset($car->image) }}" alt="{{ $car->full_name }}">
                        <div class="promo-body">
                            <h5>{{ $car->full_name }}</h5>
                            <div class="promo-harga">Rp {{ number_format($car->rent_price, 0, ',', '.') }} <small>/ hari</small></div>
                            <a href="{{ route('cars.show', $car) }}" class="btn btn-oranye btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection