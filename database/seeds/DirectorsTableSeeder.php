<?php

use Illuminate\Database\Seeder;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('directors')->delete();

        \DB::table('directors')->insert(array(
            0 =>
                array(
                    'id' => '1',
                    'name' => 'QUENTIN TARANTINO',
                    'created_at' => \Carbon\Carbon::now(),
                ),
            1 =>
                array(
                    'id' => '2',
                    'name' => 'CHRISTOPHER NOLAN',
                    'created_at' => \Carbon\Carbon::now(),
                ),
            2 =>
                array(
                    'id' => '3',
                    'name' => 'MARTIN SCORSESE',
                    'created_at' => \Carbon\Carbon::now(),
                ),
            3 =>
                array(
                    'id' => '4',
                    'name' => 'STEVEN SPIELBERG',
                    'created_at' => \Carbon\Carbon::now(),
                ),
            4 =>
                array(
                    'id' => '5',
                    'name' => 'PAUL THOMAS ANDERSON',
                    'created_at' => \Carbon\Carbon::now(),
                )
        ));
    }
}
