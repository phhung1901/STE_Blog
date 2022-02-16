<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Posts')->insert([
            'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'title' => 'Even the all-powerful Pointing has no control about the blind texts',
            'image' => '{"image1" : "02.jpg", "image2" : "02_2.jpg"}',
            'user_id' => '1',
            'category_id' => '1',
            'tag_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('Posts')->insert([
            'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'title' => 'Even the all-powerful Pointing has no control about the blind texts',
            'image' => '{"image1" : "02.jpg", "image2" : "02_2.jpg"}',
            'user_id' => '1',
            'category_id' => '2',
            'tag_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('Posts')->insert([
            'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'title' => 'Even the all-powerful Pointing has no control about the blind texts',
            'image' => '{"image1" : "02.jpg", "image2" : "02_2.jpg"}',
            'user_id' => '1',
            'category_id' => '2',
            'tag_id' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
