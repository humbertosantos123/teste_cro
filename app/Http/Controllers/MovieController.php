<?php

namespace App\Http\Controllers;

use App\Director;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::where('user_id', \Auth::user() ? \Auth::user()->id : 0)->get();
        return view('movies/index', ['movies' => $movies]);
    }

    public function create()
    {
        $movie = Movie::orderBy('title')->get();
        $directors = Director::orderBy('name')->get();

        return view('movies.create', [
            'movies' => $movie,
            'directors' => $directors,
            'arrayRating' => Movie::arrayRating
        ]);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'picture' => 'required|min:3',
            'releaseDate' => 'required|date_format:d/m/Y',
            'description' => 'required|min:3',
        ], [], [
            'title' => 'Titulo',
            'picture' => 'foto',
            'releaseDate' => 'data',
            'description' => 'Descrição',
        ]);

        $user = $request->user();

        $movie_title = $request->input('title');
        $movie_picture = $request->input('picture');
        $date = str_replace('/', '-', $request->input('releaseDate'));
        $movie_rating = $request->input('rating');
        $movie_director_id = $request->input('director');
        $movie_description = $request->input('description');

        $movie = new Movie;
        $movie->picture = $movie_picture;
        $movie->title = $movie_title;
        $movie->description = $movie_description;
        $movie->rating = $movie_rating;
        $movie->releaseDate = date( 'Y-m-d', strtotime( $date ) );
        $movie->director_id = $movie_director_id;
        $movie->user_id = $user->id;

        $movie->save();

        return redirect()->route('movies.index');
    }

    public function show(Movie $movie)
    {
        $movie->load('director')->get();
        return view('movies.show', ['movie' => $movie]);
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', [
            'movie' => $movie,
            'directors' => Director::orderBy('name')->get(),
            'arrayRating' => Movie::arrayRating
        ]);
    }

    public function update(Request $request, Movie $movie)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'picture' => 'required|min:3',
            'releaseDate' => 'required|date_format:d/m/Y',
            'description' => 'required|min:3',
        ], [], [
            'title' => 'Titulo',
            'picture' => 'foto',
            'releaseDate' => 'data',
            'description' => 'Descrição',
        ]);

        $movie_title = $request->input('title');
        $movie_picture = $request->input('picture');
        $movie_rating = $request->input('rating');
        $movie_director_id = $request->input('director');
        $movie_description = $request->input('description');

        $date = str_replace('/', '-', $request->input('releaseDate'));

        $movie->title = $movie_title;
        $movie->picture = $movie_picture;
        $movie->description = $movie_description;
        $movie->rating = $movie_rating;
        $movie->releaseDate = date( 'Y-m-d', strtotime( $date ) );
        $movie->director_id = $movie_director_id;
        $movie->updated_at = now();

        $movie->save();
        return redirect()->route('movies.show', ['movie' => $movie->id]);
    }

    public function delete(Movie $movie)
    {
        $movie->delete();

        return $this->index();
    }
}
