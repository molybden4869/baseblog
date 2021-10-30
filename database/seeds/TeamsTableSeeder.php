<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'league_id' => 1,
                'name' => '読売ジャイアンツ',
            ],
            [
                'league_id' => 1,
                'name' => '阪神タイガース',
            ],
            [
                'league_id' => 1,
                'name' => '中日ドラゴンズ',
            ],
            [
                'league_id' => 1,
                'name' => '横浜DeNAベイスターズ',
            ],
            [
                'league_id' => 1,
                'name' => '広島東洋カープ',
            ],
            [
                'league_id' => 1,
                'name' => '東京ヤクルトスワローズ',
            ],
            [
                'league_id' => 2,
                'name' => '福岡ソフトバンクホークス',
            ],
            [
                'league_id' => 2,
                'name' => '千葉ロッテマリーンズ',
            ],
            [
                'league_id' => 2,
                'name' => '埼玉西武ライオンズ',
            ],
            [
                'league_id' => 2,
                'name' => '東北楽天ゴールデンイーグルス',
            ],
            [
                'league_id' => 2,
                'name' => '北海道日本ハムファイターズ',
            ],
            [
                'league_id' => 2,
                'name' => 'オリックス・バファローズ',
            ],
            [
                'league_id' => 3,
                'name' => 'チーム指定なし',
            ],
        ]);
    }
}
