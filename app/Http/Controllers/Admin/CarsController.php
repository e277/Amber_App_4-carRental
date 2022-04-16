<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function adminIndex() {
        return view('admin.dashboard');
    }
    public function listOfCars() {
        $cars = Car::paginate(5);
        return view('admin.car', compact('cars'));
    }
}
