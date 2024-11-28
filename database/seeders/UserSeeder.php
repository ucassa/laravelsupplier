<?php

// database/seeders/UserSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            ['nama' => 'User1', 'username' => 'user1', 'password' => bcrypt('password1'), 'level' => 'admin'],
            ['nama' => 'User2', 'username' => 'user2', 'password' => bcrypt('password2'), 'level' => 'user'],
            ['nama' => 'User3', 'username' => 'user3', 'password' => bcrypt('password3'), 'level' => 'user'],
        ]);
    }
}
