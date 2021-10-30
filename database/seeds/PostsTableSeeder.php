<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'team_id' => 1,
                'title' => '2020年度の順位',
                'body' => '巨人は今年は1位でした',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'team_id' => 1,
                'title' => '2021年度の順位',
                'body' => '巨人は今年は3位でした',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            
        ]);
    }
}
