<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create([
            'name'        => 'L\'eau et Moi',
            'address'     => 'Marvie 19',
            'city'        => 'Bastogne',
            'postal_code' => '6600',
            'phone'       => null,
            'is_active'   => true,
        ]);

        Site::create([
            'name'        => 'Piscine de Bastogne',
            'address'     => 'Rue de la Piscine 1',
            'city'        => 'Bastogne',
            'postal_code' => '6600',
            'phone'       => null,
            'is_active'   => true,
        ]);
    }
}
