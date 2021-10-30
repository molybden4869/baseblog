<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LeaguesTableSeeder::class,
            TeamsTableSeeder::class,
            UsersTableSeeder::class,
            PostsTableSeeder::class,
        ]);
    }
}
