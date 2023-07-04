<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $leader_data = [
            [
                'name'              => 'पृथ्वीमान गुरुङ',
                'position'          => 'प्रदेश प्रमुख',
                'birthday'          => '2006-09-28',
                'birth_place'       => 'माछापुच्छ्रे गा.पा. वडा नं. ९, कास्की',
                'photo'             => 'b00f1338c6d1bc48a923bbceb05796ddb6ab96ee.jpg',
                'father_name'       => 'जगत प्रसाद गुरुङ्ग',
                'mother_name'       => 'पदम कुमारी गुरुङ्ग',
                'contact_no'        => '9855059446',
                'email'             => 'gurung.prithvi24@gmail.com',
                'qualification'     => 'स्नातकोत्तर',
                'work_exp'          => 'सामाजिक तथा राजनीतिक क्षेत्र',
                'political_affairs' => 'छैन',
                'lang'              => 'नेपाली, अंग्रेजी, हिन्दी, गुरुङ्ग',
                'travel_abroad'     => 'भारत',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]
        ];

        DB::table('leaders')->insert($leader_data);
    }
}
