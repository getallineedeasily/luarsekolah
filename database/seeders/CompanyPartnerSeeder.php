<?php

namespace Database\Seeders;

use App\Models\CompanyPartner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyPartnerSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumni = [
            [
                'name' => 'vale',
                'type' => 'alumni',
                'image' => 'vale.png'
            ],
            [
                'name' => 'mathspace',
                'type' => 'alumni',
                'image' => 'mathspace.png'
            ],
            [
                'name' => 'shopee',
                'type' => 'alumni',
                'image' => 'shopee.png'
            ],
            [
                'name' => 'grab',
                'type' => 'alumni',
                'image' => 'grab.png'
            ],
            [
                'name' => 'pertamina',
                'type' => 'alumni',
                'image' => 'pertamina.png'
            ],
            [
                'name' => 'dicoding',
                'type' => 'alumni',
                'image' => 'dicoding.png'
            ],
            [
                'name' => 'pesona-indonesia',
                'type' => 'alumni',
                'image' => 'pesona-indonesia.png'
            ],

        ];

        $partner = [
            [
                'name' => 'kemenkes',
                'type' => 'partner',
                'image' => 'kemenkes.png'
            ],
            [
                'name' => 'flip',
                'type' => 'partner',
                'image' => 'flip.png'
            ],
            [
                'name' => 'gojek',
                'type' => 'partner',
                'image' => 'gojek.png'
            ],
            [
                'name' => 'greeneration',
                'type' => 'partner',
                'image' => 'greeneration.png'
            ],
            [
                'name' => 'bukalapak',
                'type' => 'partner',
                'image' => 'bukalapak.png'
            ],
            [
                'name' => 'tokopedia',
                'type' => 'partner',
                'image' => 'tokopedia.png'
            ],
            [
                'name' => 'blibli',
                'type' => 'partner',
                'image' => 'blibli.png'
            ],
            [
                'name' => 'hrd-bacot',
                'type' => 'partner',
                'image' => 'hrd-bacot.png'
            ],
        ];

        $company = [...$alumni, ...$partner];

        foreach ($company as $value) {
            CompanyPartner::factory()->create($value);
        }
        ;
    }
}
