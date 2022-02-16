<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'fruits'
        ]);
        DB::table('tags')->insert([
            'name' => 'tomatoe'
        ]);
        DB::table('tags')->insert([
            'name' => 'mango'
        ]);
        DB::table('tags')->insert([
            'name' => 'apple'
        ]);
        DB::table('tags')->insert([
            'name' => 'carrots'
        ]);
        DB::table('tags')->insert([
            'name' => 'orange'
        ]);
        DB::table('tags')->insert([
            'name' => 'pepper'
        ]);
        DB::table('tags')->insert([
            'name' => 'egg'
        ]);
    }
}
