<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.admin',
                'password' => bcrypt('nimda1357'),
                'foto' => 'user.png',
                'level' => 1
            ],
            [
                'name' => 'Kasir',
                'email' => 'kasir@gmail.com',
                'password' => bcrypt('kasir1234'),
                'foto' => 'user.png',
                'level' => 2
            ]
        ));
    }
}
