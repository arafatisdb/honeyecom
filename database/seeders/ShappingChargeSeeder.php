<?php

namespace Database\Seeders;

use App\Models\ChippingCharge;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShappingChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChippingCharge::create([
            'in_side_dhaka' => 60,
            'out_side_dhaka' => 100
        ]);
    }
}
