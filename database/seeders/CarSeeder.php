<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'brand'        => 'Toyota',
                'model'        => 'Avanza',
                'year'         => 2022,
                'rent_price'   => 400000,
                'image'        => 'assets/images/toyota-avanza22.jpg',
                'transmission' => 'Manual',
            ],
            [
                'brand'        => 'Toyota',
                'model'        => 'Innova Reborn',
                'year'         => 2021,
                'rent_price'   => 700000,
                'image'        => 'assets/images/toyota-novaR21.jpg',
                'transmission' => 'Automatic',
            ],
            [
                'brand'        => 'Daihatsu',
                'model'        => 'Xenia',
                'year'         => 2022,
                'rent_price'   => 350000,
                'image'        => 'assets/images/dahatsu-xena22.jpg',
                'transmission' => 'Manual',
            ],
            [
                'brand'        => 'Honda',
                'model'        => 'Brio RS',
                'year'         => 2023,
                'rent_price'   => 300000,
                'image'        => 'assets/images/honda-bro23.jpg',
                'transmission' => 'Automatic',
            ],
            [
                'brand'        => 'Toyota',
                'model'        => 'Fortuner VRZ',
                'year'         => 2022,
                'rent_price'   => 1200000,
                'image'        => 'assets/images/toyota-fortuner20.jpg',
                'transmission' => 'Automatic',
            ],
            [
                'brand'        => 'Mitsubishi',
                'model'        => 'Pajero Sport',
                'year'         => 2021,
                'rent_price'   => 1300000,
                'image'        => 'assets/images/pajero-sport21.jpg',
                'transmission' => 'Automatic',
            ],
            [
                'brand'        => 'Suzuki',
                'model'        => 'Ertiga',
                'year'         => 2022,
                'rent_price'   => 380000,
                'image'        => 'assets/images/suzuk-ert322.jpg',
                'transmission' => 'Manual',
            ],
            [
                'brand'        => 'Honda',
                'model'        => 'HR-V',
                'year'         => 2023,
                'rent_price'   => 700000,
                'image'        => 'assets/images/honda-hrv23.jpg',
                'transmission' => 'Automatic',
            ],
            [
                'brand'        => 'Toyota',
                'model'        => 'Alphard',
                'year'         => 2020,
                'rent_price'   => 2500000,
                'image'        => 'assets/images/toyota-alpahrd20.jpg',
                'transmission' => 'Automatic',
            ],
            [
                'brand'        => 'Toyota',
                'model'        => 'Hiace Commuter',
                'year'         => 2021,
                'rent_price'   => 1500000,
                'image'        => 'assets/images/toyota-hace21.jpg',
                'transmission' => 'Manual',
            ],
        ];

        foreach ($data as $item) {
            Car::create($item);
        }
    }
}
