<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
                array(
                    'id' => '1',
                    'name' => 'Humberto',
                    'email' => 'email1@gmail.com',
                    'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                    'document' => '000.000.000-00',
                    'birthday' => date( 'Y-m-d', strtotime( '18-09-1991' ) ),
                    'last_access' => \Carbon\Carbon::now(),
                    'created_at' => \Carbon\Carbon::now(),
                ),
            1 =>
                array(
                    'id' => '2',
                    'name' => 'joao1',
                    'email' => 'email2@gmail.com',
                    'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                    'document' => '000.000.000-01',
                    'birthday' => date( 'Y-m-d', strtotime( '19-09-1991' ) ),
                    'last_access' => \Carbon\Carbon::now(),
                    'created_at' => \Carbon\Carbon::now(),
                ),
            2 =>
                array(
                    'id' => '3',
                    'name' => 'maria',
                    'email' => 'email3@gmail.com',
                    'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                    'document' => '000.000.000-33',
                    'birthday' => date( 'Y-m-d', strtotime( '22-09-1991' ) ),
                    'last_access' => \Carbon\Carbon::now(),
                    'created_at' => \Carbon\Carbon::now(),
                ),
            3 =>
                array(
                    'id' => '4',
                    'name' => 'ze',
                    'email' => 'email4@gmail.com',
                    'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                    'document' => '000.000.333-22',
                    'birthday' => date( 'Y-m-d', strtotime( '23-09-1992' ) ),
                    'last_access' => \Carbon\Carbon::now(),
                    'created_at' => \Carbon\Carbon::now(),
                ),
            4 =>
                array(
                    'id' => '5',
                    'name' => 'teste',
                    'email' => 'email6@gmail.com',
                    'password' => \Illuminate\Support\Facades\Hash::make('123456'),
                    'document' => '111.000.000-00',
                    'birthday' => date( 'Y-m-d', strtotime( '29-09-1991' ) ),
                    'last_access' => \Carbon\Carbon::now(),
                    'created_at' => \Carbon\Carbon::now(),
                )
        ));
    }
}
