<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Vegetables',
            'description' => 'Những bài viết liên quan đến chủ đề thực vật,......',
        ]);
        DB::table('categories')->insert([
            'name' => 'Fruits',
            'description' => 'Những bài viết liên quan đến chủ đề hoa quả,......',
        ]);
        DB::table('categories')->insert([
            'name' => 'Juice',
            'description' => 'Những bài viết liên quan đến chủ đề nước ép,......',
        ]);
        DB::table('categories')->insert([
            'name' => 'Dries',
            'description' => 'Những bài viết liên quan đến chủ đề đồ ăn khô,......',
        ]);
    }
}
