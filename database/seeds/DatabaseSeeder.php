<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		DB::table('users')->insert([
        	'userID' => '00000000',
        	'username' => 'admin',
        	'name' => 'Admin',
        	'email' => 'admin@localhost',
        	'password' => bcrypt('NloOxygen'),
        	'active' => 1,
        ]);
    }
}
