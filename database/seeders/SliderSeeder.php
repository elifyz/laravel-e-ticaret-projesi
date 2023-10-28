<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'image' => 'images/cantakapak.jpg',
            'name' => 'Yeni Sezon',
            'link' => 'urunler',
            'content' => 'Keşfetmeye hazır mısınız?',
            'status' => '1',
        ]);
    }
}
