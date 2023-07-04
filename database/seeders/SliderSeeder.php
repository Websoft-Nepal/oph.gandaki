<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slider_data = [
            [
                'title'         => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum?',
                'photo'         => 'https://oph.gandaki.gov.np/site/uploads/77d3d1a3582b464a33e35126acdc1f178fa4121f.JPG',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'         => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum?',
                'photo'         => 'https://oph.gandaki.gov.np/site/uploads/28a9d1819dcbe25081e28d3253088b5d000804c8.JPG',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'         => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum?',
                'photo'         => 'https://oph.gandaki.gov.np/site/uploads/2b46e34cace5f684a31cca7fe822c65c71398019.jpg',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
        ];
        
        
        DB::table('sliders')->insert($slider_data);
    }
}
