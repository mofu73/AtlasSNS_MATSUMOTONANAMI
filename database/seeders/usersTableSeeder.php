<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //下記コードを追加//
        DB::table('users')->insert([
            ['name' => 'Atlas七郎'],
            ['email' => 'Atlas@gmail.com'],
            ['password' => bcrypt('atlas1')]
        ]);
    }
}
