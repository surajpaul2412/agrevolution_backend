<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
         	'role_id' => '1',
        	'name' => 'Admin',
        	'username' => 'admin',
        	'email' => 'admin@demo.com',
        	'password' => bcrypt('test1234'),
        ]);

        DB::table('users')->insert([
         	'role_id' => '2',
        	'name' => 'Editor',
        	'username' => 'editor',
        	'email' => 'editor@demo.com',
        	'password' => bcrypt('test1234'),
        ]);
    }
}
