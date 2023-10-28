<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=> 'Bej Pamuklu Sıfır Yaka Tişört',
            'category_id'=> '1',
            'content'=> '<p> 100% Pamuk </p>',
            'image'=> 'images/tisort1.jpg',
            'price'=> 199,
            'size'=> 'S',
            'color'=> 'Bej',
            'qty'=> 10,
            'status'=> '1',
        ]);

        Product::create([
            'name'=> 'Çok Renkli Bağlama Detaylı Uzun Elbise',
            'category_id'=> '1',
            'content'=> '<p> 90% Viskon 10% Metalik </p>',
            'image'=> 'images/elbise2.jpg',
            'price'=> 459,
            'size'=> 'S',
            'color'=> 'Çok renkli',
            'qty'=> 10,
            'status'=> '1',
        ]);

        Product::create([
            'name'=> 'Çok Renkli V Yaka Tül Elbise',
            'category_id'=> '1',
            'content'=> '<p> 94% Polyester 6% Elastan </p>',
            'image'=> 'images/elbise5.jpg',
            'price'=> 299,
            'size'=> 'M',
            'color'=> 'Çok renkli',
            'qty'=> 10,
            'status'=> '1',
        ]);

        Product::create([
            'name'=> 'Kahverengi Yüksek Bel Wide-Leg Pantolon',
            'category_id'=> '1',
            'content'=> '<p>100% Pamuk </p>',
            'image'=> 'images/pant1.jpg',
            'price'=> 699,
            'size'=> 'M',
            'color'=> 'Kahverengi',
            'qty'=> 10,
            'status'=> '1',
        ]);

        Product::create([
            'name'=> 'Kırmızı Pamuklu Crop Tişört',
            'category_id'=> '1',
            'content'=> '<p> %100 Pamuk</p>',
            'image'=> 'images/tisort2.jpg',
            'price'=> 229,
            'size'=> 'L',
            'color'=> 'Kırmızı',
            'qty'=> 10,
            'status'=> '1',
        ]);

        Product::create([
            'name'=> 'Siyah Yüksek Bel Straight-Fit Denim Pantolon',
            'category_id'=> '1',
            'content'=> '<p> 100% Pamuk </p>' ,
            'image'=> 'images/pant4.jpg',
            'price'=> 1195,
            'size'=> 'L',
            'color'=> 'Siyah',
            'qty'=> 10,
            'status'=> '1',
        ]);

        Product::create([
            'name'=> 'Yüksek Tabanlı Spor Ayakkabı',
            'category_id'=> '5',
            'content'=> '<p> 90% Poliüretan 10% Polyester, Topuk boyu: 3.5 cm </p>' ,
            'image'=> 'images/sporA2.jpg',
            'price'=> 499,
            'size'=> '38',
            'color'=> 'Çok renkli',
            'qty'=> 10,
            'status'=> '1',
        ]);

        Product::create([
            'name'=> 'Sarı Bağcıklı Spor Ayakkabı',
            'category_id'=> '5',
            'content'=> '<p> 80% Deri 20% Poliüretan, Topuk boyu: 3 cm </p>' ,
            'image'=> 'images/sporA5.jpg',
            'price'=> 449,
            'size'=> '39',
            'color'=> 'Çok renkli',
            'qty'=> 10,
            'status'=> '1',
        ]);

        Product::create([
            'name'=> 'Kırmızı Büzgü Detaylı Çanta',
            'category_id'=> '9',
            'content'=> '<p> 100% Poliüretan, Yükseklik x Genişlik x Derinlik : 12 x 24 x 8 cm </p>' ,
            'image'=> 'images/canta3.jpg',
            'price'=> 229,
            'size'=> 'One Size',
            'color'=> 'Kırmızı',
            'qty'=> 10,
            'status'=> '1',
        ]);


    }
}
