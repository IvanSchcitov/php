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
                    'email' => 'joody97@yandex.ru',
                    //'password' => '$2y$10$Zldk9kXB3PlJgZ65INqs5.eY6su3wDiCPDHaDw0DgNiCCYcOeHFJS',
                    'password' => Hash::make('123456'),
                    'role' => '1'
                ],
                [
                    'name' => 'Sam',
                    'email' => 'sam61@rambler.ru',
//                    'password' => '$2y$10$5oYs4O6LadK.gGax31hihOe0krD1WmrkdgVACZcYwSBNsNC3yuhyC',
                    'password' => Hash::make('123456'),
                    'role' => '2'
                ],
                [
                    'name' => 'Margaret',
                    'email' => 'miss_butterfly@google.com',
//                    'password' => '$2y$10$GA/Lpf9coESMT2kQVd0psuZuAqjOvOh1QlFSVyx0ulCcRPBTb8nhi',
                    'password' => Hash::make('123456'),
                    'role' => '2'
                ]
            )
        );
    }
}
