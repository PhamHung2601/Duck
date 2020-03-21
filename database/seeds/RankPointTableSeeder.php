<?php

use Illuminate\Database\Seeder;

class RankPointTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RankPoints::class, 50)->create();
    }
}
