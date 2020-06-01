<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add default user to system
        DB::table('users')
            ->insert([
                'name' => 'admin',
                'password' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'User'
            ]);
    }
}
