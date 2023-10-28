<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $giyim = Category::create([
            'name' => 'Giyim',
            'content' => 'Giyim',
            'slug' => '',
            'image' => 'images/elbisekapak.jpg',
            'thumbnail' => null,
            'cat_ust' => null,
            'status' => '1',

        ]);

        Category::create([
            'name' => 'Tişört',
            'content' => 'Tişört',
            'slug' => '',
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $giyim->id,
            'status' => '1',

        ]);

        Category::create([
            'name' => 'Elbise',
            'content' => 'Elbise',
            'slug' => '',
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $giyim->id,
            'status' => '1',

        ]);

        Category::create([
            'name' => 'Pantolon',
            'content' => 'Pantolon',
            'slug' => '',
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $giyim->id,
            'status' => '1',

        ]);

        $ayakkabi = Category::create([
            'name' => 'Ayakkabı',
            'content' => 'Ayakkabı',
            'slug' => '',
            'image' => 'images/ayakkabikapak2.jpg',
            'thumbnail' => null,
            'cat_ust' => null,
            'status' => '1',

        ]);

        Category::create([
            'name' => 'Spor Ayakkabı',
            'content' => 'Spor Ayakkabı',
            'slug' => '',
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $ayakkabi->id,
            'status' => '1',

        ]);

        Category::create([
            'name' => 'Topuklu Ayakkabı',
            'content' => 'Topuklu Ayakkabı',
            'slug' => '',
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $ayakkabi->id,
            'status' => '1',

        ]);

        Category::create([
            'name' => 'Bot & Çizme',
            'content' => 'Bot & Çizme',
            'slug' => '',
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $ayakkabi->id,
            'status' => '1',

        ]);

        $canta = Category::create([
            'name' => 'Çanta',
            'content' => 'Çanta',
            'slug' => '',
            'image' => 'images/canta1.jpg',
            'thumbnail' => null,
            'cat_ust' => null,
            'status' => '1',
            ]);


    }
}
