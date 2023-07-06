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
                'photo'             => '161fef5b-b76e-41ed-8c83-377bd38358da-1688633487.jpg',
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
            ],
            [
                'name'              => 'अण प्रसाद न्यौपाने',
                'position'          => 'सचिव',
                'birthday'          => '',
                'birth_place'       => '',
                'photo'             => '1b824177-1780-4383-8157-00ce2d864649-1688633561.jpg',
                'father_name'       => 'कुश्माखर न्यौपाने',
                'mother_name'       => 'देउ रुपा न्यौपाने',
                'contact_no'        => '९८४१६२४९२४',
                'email'             => 'neupaneana57@gmail.com',
                'qualification'     => 'स्नातकोत्तर',
                'work_exp'          => 'वीस वर्ष',
                'political_affairs' => '',
                'lang'              => 'नेपाली',
                'travel_abroad'     => 'भारत, चीन, दक्षिण कोरिया, रुस',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'चण्डीप्रसाद अर्याल',
                'position'          => 'प्रवक्ता',
                'birthday'          => '',
                'birth_place'       => '',
                'photo'             => '45ee5784-680b-4c91-8532-852db400b619-1688633576.jpg',
                'father_name'       => '',
                'mother_name'       => '',
                'contact_no'        => '061467555',
                'email'             => 'kcspokhara@gmail.com',
                'qualification'     => 'स्नातकोत्तर',
                'work_exp'          => '',
                'political_affairs' => '',
                'lang'              => 'नेपाली',
                'travel_abroad'     => '',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]
        ];

        DB::table('leaders')->insert($leader_data);
    }
}
