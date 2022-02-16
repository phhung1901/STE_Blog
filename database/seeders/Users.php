<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Pham Hung",
            'email' => 'hung94464@nuce.edu.vn',
            'birthday' => '2001-01-19',
            'level' => '2',
            'password' => "PHH190101"
        ]);
    }
}
