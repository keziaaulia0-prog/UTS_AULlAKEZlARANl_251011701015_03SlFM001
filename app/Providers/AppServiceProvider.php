<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Data identitas dipakai di Beranda, Tentang, Kontak, dan Footer.
        
        View::share('identitas', [
            'nama'  => 'Aulia Keziarani Putri',
            'nim'   => '251011701015',
            'email' => 'keziaaulia0@gmail.com',
            'prodi' => 'Sistem Informasi',
            'dosen' => 'Afif Efendi',
        ]);
    }
}