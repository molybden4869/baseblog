<?php

use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leagues')->insert([
            [
                'name' => 'セ・リーグ'
            ],
            [
                'name' => 'パ・リーグ'
            ],
            [
                'name' => 'その他'
            ],
        ]);
    }
}
