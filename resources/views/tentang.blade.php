@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<section class="container py-5">
    <h2 class="section-title mb-4">Tentang Aulia Rent Car</h2>
    <div class="row g-4 align-items-stretch">
        <div class="col-lg-7">
            <p>Aulia Rent Car adalah layanan rental mobil harian yang menyediakan berbagai pilihan kendaraan, mulai dari city car, MPV keluarga, SUV, sampai van untuk rombongan.</p>
            <p>Website ini dibuat sebagai tugas Ujian Tengah Semester mata kuliah Rekayasa Web menggunakan framework Laravel, Blade Template, dan Bootstrap.</p>
            <h5 class="mt-4">Fitur Website</h5>
            <ul>
                <li>Halaman daftar mobil dengan pencarian, filter transmisi, dan pagination.</li>
                <li>Halaman detail mobil beserta kalkulator biaya sewa.</li>
                <li>Data mobil berasal dari database (migration dan seeder).</li>
            </ul>
        </div>
        <div class="col-lg-5">
            
            <div class="tentang-gambar">
                <img src="{{ asset('assets/images/alphard-hero.png') }}" alt="Mobil rental">
            </div>
        </div>
    </div>
</section>
@endsection