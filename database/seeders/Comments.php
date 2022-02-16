<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Comments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'content' => 'Bài viết rất hay, rất bổ ích, quá tuyệt vời luôn :)))',
            'user_id' => '1',
            'post_id' => '1'
        ]);
        DB::table('comments')->insert([
            'content' => 'Bài viết rất hay, rất bổ ích, quá tuyệt vời luôn :)))',
            'user_id' => '1',
            'post_id' => '1'
        ]);
        DB::table('comments')->insert([
            'content' => 'Bài viết rất hay, rất bổ ích, quá tuyệt vời luôn :)))',
            'user_id' => '1',
            'post_id' => '1'
        ]);
    }
}
