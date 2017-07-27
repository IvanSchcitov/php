<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            array(
                [
                    'title' => "Hellow 1",
                    'alias' => 'alias Hellow 1',
                    'intro' => "Free intro text",
                    'body' => "free body text",
                    //'created_at' => '20.07.2017 10:10:17'
                ],
                [
                    'title' => "Hellow 2",
                    'alias' => 'alias Hellow 2',
                    'intro' => "Free intro text",
                    'body' => "free body text",
                    //'created_at' => '20.07.2017 10:10:17'
                ],
                [
                    'title' => "Hellow 3",
                    'alias' => 'alias Hellow 3',
                    'intro' => "Free intro text",
                    'body' => "free body text",
                    //'created_at' => '20.07.2017 10:10:17'
                ]
            )
        );
    }
}
