<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chess_clubs')->truncate();
        DB::table('chess_clubs')->insert([
            [
                'name' => 'PSV',
                'phone_number' => '0612345678',
            ], [
                'name' => 'Ajax',
                'phone_number' => '0612345679',

            ]
        ]);
    }
}
