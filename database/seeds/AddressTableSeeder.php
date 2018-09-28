<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('addresses')->delete();

        \DB::table('addresses')->insert(array(
            0 =>
                array(
                    'id' => '1',
                    'zip_code' => '05411-000',
                    'address' => 'rua teste 1',
                    'number' => '11',
                    'complement' => 'casa 1',
                    'neighborhood' => 'bairro 1',
                    'city' => 'São Paulo',
                    'state' => 'SP',
                    'user_id' => '1',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ),
            1 =>
                array(
                    'id' => '2',
                    'zip_code' => '05411-000',
                    'address' => 'rua teste 2',
                    'number' => '22',
                    'complement' => 'casa 2',
                    'neighborhood' => 'bairro 2',
                    'city' => 'São Paulo',
                    'state' => 'SP',
                    'user_id' => '1',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ),
            2 =>
                array(
                    'id' => '3',
                    'zip_code' => '05411-000',
                    'address' => 'rua teste 3',
                    'number' => '33',
                    'complement' => 'casa 3',
                    'neighborhood' => 'bairro 3',
                    'city' => 'São Paulo',
                    'state' => 'SP',
                    'user_id' => '2',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ),
            3 =>
                array(
                    'id' => '4',
                    'zip_code' => '38800-000',
                    'address' => 'rua teste 4',
                    'number' => '44',
                    'complement' => 'casa 4',
                    'neighborhood' => 'bairro 4',
                    'city' => 'São Gotardo',
                    'state' => 'MG',
                    'user_id' => '2',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ),
            4 =>
                array(
                    'id' => '5',
                    'zip_code' => '38800-000',
                    'address' => 'rua teste 55',
                    'number' => '55',
                    'complement' => 'casa 5',
                    'neighborhood' => 'bairro 5',
                    'city' => 'São Gotardo',
                    'state' => 'MG',
                    'user_id' => '3',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                )
        ));
    }
}
