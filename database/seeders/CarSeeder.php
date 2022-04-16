<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'car_nm' => 'Ford',
            'car_brand' => 'Edge',
            'car_num' => 'fd123'
        ]);
        Car::create([
            'car_nm' => 'Ford',
            'car_brand' => 'Mustang',
            'car_num' => 'fd123'
        ]);
        Car::create([
            'car_nm' => 'Jeep',
            'car_brand' => 'Compass',
            'car_num' => 'fd123'
        ]);
        Car::create([
            'car_nm' => 'Jeep',
            'car_brand' => 'Renegade',
            'car_num' => 'fd123'
        ]);
        Car::create([
            'car_nm' => 'Toyota',
            'car_brand' => 'Camry',
            'car_num' => 'fd123'
        ]);
        Car::create([
            'car_nm' => 'Toyota',
            'car_brand' => 'Corolla',
            'car_num' => 'fd123'
        ]);
    }
}
