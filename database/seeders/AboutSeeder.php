<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'image' => 'images/elbise1.jpg',
            'name'=> 'Shoppers',
            'content' => 'Hazır giyim sektöründeki yolculuğumuza, 1993 yılında açtığımız bir mağaza ile başladık. Bugün online alışveriş sitemizle, ürünlerimize herkesin kolaylıkla erişebilmesini sağlıyoruz.
                          Koleksiyonlarımızı, gündelik hayatta kadınların hem rahat hem şık olmalarını sağlayacak bir anlayışla hazırlıyoruz.',

        ]);
    }
}
