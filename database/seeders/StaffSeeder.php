<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staff_data = [
            [
                'name'          => 'Ana Prasad Neupane',
                'post'          => 'Secretary, Gazetted First',
                'photo'         => '',
                'section'       => 'Administration',
                'mobile'        => '9841624924',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'name'          => 'Chandi Prasad Aryal',
                'post'          => 'Computer Officer, Gazetted Third',
                'photo'         => '',
                'section'       => 'Information Technology',
                'mobile'        => '9856020229',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]
        ];

        DB::table('staff')->insert($staff_data);
    }
}
