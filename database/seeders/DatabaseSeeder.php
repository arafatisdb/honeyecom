<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ChippingCharge;
use Illuminate\Database\Seeder;
use Database\Seeders\ShappingChargeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        return $this->call([
            UserSeeder::class,
            TestimonialSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ShappingChargeSeeder::class,
        ]);
    }
}
