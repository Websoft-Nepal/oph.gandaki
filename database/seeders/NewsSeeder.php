<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news_data = [
            [
                'title'     => 'title 1',
                'cat_id'    => '1',
                'link'      => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'     => 'title 2',
                'cat_id'    => '1',
                'link'      => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'     => 'title 3',
                'cat_id'    => '3',
                'link'      => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'     => 'title 4',
                'cat_id'    => '1',
                'link'      => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'     => 'title 5',
                'cat_id'    => '2',
                'link'      => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'     => 'title 6',
                'cat_id'    => '3',
                'link'      => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'     => 'title 7',
                'cat_id'    => '1',
                'link'      => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'     => 'title 8',
                'cat_id'    => '1',
                'link'      => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'     => 'title 9',
                'cat_id'    => '2',
                'link'      => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'title'     => 'title 10',
                'cat_id'    => '3',
                'link'      => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
        ];

        DB::table('news')->insert($news_data);
    }
}
