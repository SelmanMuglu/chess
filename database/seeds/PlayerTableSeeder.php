<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->truncate();
        DB::table('players')->insert([
            [
                'first_name'=> 'Hans',
                'prefix'=> 'van',
                'last_name'=> 'Haag',
            ],[
                'name'=> 'Kees',
                'prefix'=> 'van',
                'last_name'=> 'Adam',

            ],[
                'first_name'=> 'Big',
                'prefix'=> 'van',
                'last_name'=> 'Smoke',

            ],[
                'first_name'=> 'Till',
                'prefix'=> 'I',
                'last_name'=> 'Collapse',
            ],[
                'first_name'=> 'Wont',
                'prefix'=> 'Give',
                'last_name'=> 'Up',

            ],[
                'first_name'=> 'Moms',
                'prefix'=> '',
                'last_name'=> 'Spaghetti',

            ],[
                'first_name'=> 'Lorem',
                'prefix'=> 'den',
                'last_name'=> 'Ipsum',

            ],[
                'first_name'=> 'Klaas',
                'prefix'=> '',
                'last_name'=> 'Rugge',

            ]
        ]);
    }

}
