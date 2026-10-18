<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = [
        'brand',
        'model',
        'year',
        'rent_price',
        'image',
        'transmission',
    ];

    // Nama lengkap mobil, contoh: "Toyota Avanza"
    public function getFullNameAttribute(): string
    {
        return $this->brand . ' ' . $this->model;
    }
}
