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
                    'password' => '$2y$10$Zldk9kXB3PlJgZ65INqs5.eY6su3wDiCPDHaDw0DgNiCCYcOeHFJS',
                    'role' => '1'
                ],
                [
                    'name' => 'User1',
                    'email' => 'a1@a1.ru',
                    'password' => '$2y$10$5oYs4O6LadK.gGax31hihOe0krD1WmrkdgVACZcYwSBNsNC3yuhyC',
                    'role' => '2'
                ],
                [
                    'name' => 'User2',
                    'email' => 'a2@a2.ru',
                    'password' => '$2y$10$GA/Lpf9coESMT2kQVd0psuZuAqjOvOh1QlFSVyx0ulCcRPBTb8nhi',
                    'role' => '2'
                ]
            )
        );
    }
}
