<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Package::create([
            'name' => 'Dubai Luxury Escape',
            'location' => 'Dubai, UAE',
            'description' => 'A 5-star luxury holiday package to Dubai.',
            'price' => 120000,
            'image' => 'dubai.jpg',
        ]);

        \App\Models\Package::create([
            'name' => 'Maasai Mara Safari',
            'location' => 'Kenya',
            'description' => 'Experience the Big Five with a luxury safari camp.',
            'price' => 85000,
            'image' => 'mara.jpg',
        ]);
    }

}
