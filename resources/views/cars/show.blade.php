@extends('layouts.app')

@section('title', $car->full_name)

@section('content')
<section class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('cars.index') }}">Daftar Mobil</a></li>
            <li class="breadcrumb-item active">{{ $car->full_name }}</li>
        </ol>
    </nav>

    <div class="row g-5 align-items-start mb-5">
        <div class="col-md-6">
            <img src="{{ asset($car->image) }}" alt="{{ $car->full_name }}" class="detail-gambar">
        </div>
        <div class="col-md-6">
            <span class="badge badge-trans mb-2">{{ $car->transmission }}</span>
            <h2 class="section-title mb-4">{{ $car->full_name }}</h2>

            <table class="table tabel-spesifikasi">
                <tr><th>Merek</th><td>{{ $car->brand }}</td></tr>
                <tr><th>Model</th><td>{{ $car->model }}</td></tr>
                <tr><th>Tahun</th><td>{{ $car->year }}</td></tr>
                <tr><th>Transmisi</th><td>{{ $car->transmission }}</td></tr>
                <tr><th>Harga Sewa</th><td><span class="harga">Rp {{ number_format($car->rent_price, 0, ',', '.') }} / hari</span></td></tr>
            </table>

            <div class="kalkulator mb-4">
                <label for="jumlahHari" class="form-label fw-semibold">Hitung biaya sewa (jumlah hari)</label>
                <input type="number" id="jumlahHari" class="form-control mb-2" value="1" min="1" data-harga="{{ $car->rent_price }}">
                <div>Total: <span class="total" id="totalSewa"></span></div>
            </div>

            <a href="{{ route('cars.index') }}" class="btn btn-outline-rental">&larr; Kembali ke Daftar Mobil</a>
        </div>
    </div>

    <h4 class="section-title mb-4">Mobil Lainnya</h4>
    <div class="row g-4">
        @foreach ($others as $other)
            @include('cars.card', ['car' => $other, 'kolom' => 'col-sm-6 col-lg-4'])
        @endforeach
    </div>
</section>
@endsection
