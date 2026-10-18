@extends('layouts.app')

@section('title', 'Daftar Mobil')

@section('content')
<section class="container py-5">
    <div class="text-center mb-4">
        <h2 class="section-title">Daftar Mobil Rental</h2>
        <p class="text-muted">Cari dan pilih mobil sesuai kebutuhanmu.</p>
    </div>
 
    <form method="GET" action="{{ route('cars.index') }}" class="row g-2 justify-content-center mb-5">
        <div class="col-md-5">
            <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Cari merek atau model...">
        </div>
        <div class="col-md-3">
            <select name="transmission" class="form-select">
                <option value="">Semua Transmisi</option>
                <option value="Manual" {{ request('transmission') === 'Manual' ? 'selected' : '' }}>Manual</option>
                <option value="Automatic" {{ request('transmission') === 'Automatic' ? 'selected' : '' }}>Automatic</option>
            </select>
        </div>
        <div class="col-md-auto d-flex gap-2">
            <button type="submit" class="btn btn-rental">Cari</button>
            <a href="{{ route('cars.index') }}" class="btn btn-outline-rental">Reset</a>
        </div>
    </form>

    <div class="row g-4">
        @forelse ($cars as $car)
            @include('cars.card', ['car' => $car, 'kolom' => 'col-sm-6 col-lg-3'])
        @empty
            <p class="text-center text-muted">Mobil tidak ditemukan.</p>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-5">
        {{ $cars->links('pagination::bootstrap-5') }}
    </div>
</section>
@endsection
