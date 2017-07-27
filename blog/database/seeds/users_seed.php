<?php

use Illuminate\Database\Seeder;

class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                [
                    'name' => 'Admin',
                    'email' => 'a@a.ru',
                    'password' => '123',
                    'role' => '1'
                ],
                [
                    'name' => 'User1',
                    'email' => 'a1@a1.ru',
                    'password' => '123',
                    'role' => '2'
                ],
                [
                    'name' => 'User2',
                    'email' => 'a2@a2.ru',
                    'password' => '123',
                    'role' => '2'
                ]
            )
        );
    }
}
