<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    public function run(): void
    {
        $zones = [
            [
                'name'=>'Zone one',
                'price_per_hour'=>'100'
            ],
            [
                'name'=>'Zone two',
                'price_per_hour'=>'150'
            ],
            [
                'name'=>'Zone three',
                'price_per_hour'=>'450'
            ], 
            [
                'name'=>'Zone four',
                'price_per_hour'=>'250'
            ], 
            [
                'name'=>'Zone five',
                'price_per_hour'=>'300'
            ],           
        ];

        foreach($zones as $zone){
            Zone::create($zone);
        }

    }
}
