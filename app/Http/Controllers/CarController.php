<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    
    public function beranda()
    {
        $cars = Car::orderBy('id')->take(8)->get();
        $specials = Car::orderBy('rent_price')->take(3)->get();
        $total = Car::count();

        return view('beranda', compact('cars', 'specials', 'total'));
    }

    // Daftar mobil + pencarian + filter transmisi + pagination
    public function index(Request $request)
    {
        $cars = Car::query()
            ->when($request->q, function ($query, $q) {
                $query->where(function ($sub) use ($q) {
                    $sub->where('brand', 'like', "%{$q}%")
                        ->orWhere('model', 'like', "%{$q}%");
                });
            })
            ->when($request->transmission, function ($query, $transmission) {
                $query->where('transmission', $transmission);
            })
            ->orderBy('id')
            ->paginate(8)
            ->withQueryString();

        return view('cars.index', compact('cars'));
    }

    // Detail mobil
    public function show(Car $car)
    {
        $others = Car::where('id', '!=', $car->id)->inRandomOrder()->take(3)->get();

        return view('cars.show', compact('car', 'others'));
    }
}