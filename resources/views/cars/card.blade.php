<div class="{{ $kolom ?? 'col-sm-6 col-lg-3' }}">
    <div class="card card-car h-100">
        <img src="{{ asset($car->image) }}" class="card-img-top" alt="{{ $car->full_name }}">
        <div class="card-body d-flex flex-column">
            <span class="badge badge-trans align-self-start mb-2">{{ $car->transmission }}</span>
            <h5 class="card-title mb-1">{{ $car->full_name }}</h5>
            <small class="text-muted mb-3">Tahun {{ $car->year }}</small>
            <div class="mt-auto">
                <div class="harga mb-3">Rp {{ number_format($car->rent_price, 0, ',', '.') }} <small class="text-muted fw-normal">/ hari</small></div>
                <a href="{{ route('cars.show', $car) }}" class="btn btn-rental btn-sm w-100">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>
