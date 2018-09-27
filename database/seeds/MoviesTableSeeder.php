<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('movies')->delete();

        \DB::table('movies')->insert(array(
            0 =>
                array(
                    'id' => '1',
                    'picture' => 'https://lh3.googleusercontent.com/-lBEeXMvJVeU/WMHNK8oSH1I/AAAAAAAABA4/lfxNruTSUxk/s1600/IMG-20170308-WA0003.jpg',
                    'title' => 'filme 1',
                    'description' => 'descricao 1',
                    'runtime' => '01:00:00',
                    'releaseDate' => '1992-01-01',
                    'director_id' => '1',
                    'user_id' => '1'
                ),
            1 =>
                array(
                    'id' => '2',
                    'picture' => 'https://lh3.googleusercontent.com/-H5x9scY0HEc/WN4vqAJdeeI/AAAAAAAABCs/V1yQpXWsX5w/s1600/IMG-20170330-WA0005.jpg',
                    'title' => 'filme 2',
                    'description' => 'descricao 2',
                    'runtime' => '01:22:00',
                    'releaseDate' => '1992-01-02',
                    'director_id' => '2',
                    'user_id' => '2'
                ),
            2 =>
                array(
                    'id' => '3',
                    'picture' => 'http://1.bp.blogspot.com/-PfTqT6BUZT4/VO-5ZZKoHtI/AAAAAAAAAX8/mgOjmqJjYag/s1600/A%2BGarota%2BDa%2BCapa%2BVermelha.jpg',
                    'title' => 'filme 3',
                    'description' => 'descricao 3',
                    'runtime' => '01:33:00',
                    'releaseDate' => '1992-01-03',
                    'director_id' => '3',
                    'user_id' => '1'
                ),
            3 =>
                array(
                    'id' => '4',
                    'picture' => 'http://rockntech.com.br/wp-content/uploads/2013/07/capas-alternativas-filmes-pouco-investimento_2.jpg',
                    'title' => 'filme 4',
                    'description' => 'descricao 4',
                    'runtime' => '01:14:00',
                    'releaseDate' => '1992-05-01',
                    'director_id' => '3',
                    'user_id' => '2'
                ),
            4 =>
                array(
                    'id' => '5',
                    'picture' => 'http://3.bp.blogspot.com/-__XyR-Wzdto/Ulie_N8LZrI/AAAAAAAAHxg/HHS7iBR3cLw/s1600/C%C3%ADrculo+De+Fogo.jpg',
                    'title' => 'filme 5',
                    'description' => 'descricao 2',
                    'runtime' => '01:01:00',
                    'releaseDate' => '1992-03-01',
                    'director_id' => '1',
                    'user_id' => '3'
                )
        ));
    }
}
