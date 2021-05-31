<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TournamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tournaments')->truncate();
        DB::table('tournaments')->insert([
            [
                'tournament' => 'adults',
            ], [
                'tournament' => 'teenagers',

            ]
        ]);
    }
}
