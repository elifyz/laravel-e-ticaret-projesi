<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name' => 'address',
            'data' => 'Adnan Menderes Bulvarı No:303 Merkez/Denizli',
        ]);

        SiteSetting::create([
            'name' => 'phone',
            'data' => '+90 258 2691689',
        ]);

        SiteSetting::create([
            'name' => 'email',
            'data' => 'emailaddress@adress.com',
        ]);
    }
}
