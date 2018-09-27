<?php
namespace App\Http\Controllers;
use App\Director;
use App\Movie;
use Illuminate\Http\Request;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $movie = Movie::where('user_id', \Auth::user() ? \Auth::user()->id : 0)->get();
      return view('movies/index', ['movies'=>$movie]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $movie = Movie::orderBy('title')->get();
      $directors = Director::orderBy('name')->get();

      return view('movies.create',[
        'movies' => $movie,
        'directors' => $directors
      ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate( $request, [
            'title'        => 'required|min:3',
            'picture' => 'required|min:3',
            'releaseDate' => 'required|min:3',
        ], [], [
            'title' => 'Titulo',
            'picture'        => 'picture',
            'releaseDate'       => 'data'
        ] );


      $movie_title = $request->input('title');
      $movie_picture =$request->input('picture');
      $movie_releaseDate = $request->input('releaseDate');
      $movie_runtime = $request->input('runtime');
      $movie_director_id = $request->input('director');
      $movie_description = $request->input('description');

     //create new movie method
      $movie = new Movie;
      $movie->picture = $movie_picture;
      $movie->title = $movie_title;
      $movie->description = $movie_description;
      $movie->runtime = $movie_runtime;
      $movie->releaseDate = $movie_releaseDate;
      $movie->director_id = $movie_director_id;
      $movie->user_id = \Auth::user()->id;

      $movie->save();

      return redirect()->route('movies.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
      $movie->load('director')->get();
      return view('movies.show', ['movie' => $movie]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
      return view('movies.edit', [
        'movie' => $movie,
        'directors' =>Director::orderBy('name')->get()
    ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {

      $movie_title = $request->input('title');
      $movie_picture =$request->input('picture');
      $movie_releaseDate = $request->input('releaseDate');
      $movie_runtime = $request->input('runtime');
      $movie_director_id = $request->input('director');
      $movie_description = $request->input('description');

      $movie->title = $movie_title;
      $movie->picture = $movie_picture;
      $movie->description = $movie_description;
      $movie->runtime = $movie_runtime;
      $movie->releaseDate = $movie_releaseDate;
      $movie->director_id = $movie_director_id;

      $movie->save();
      return redirect()->route('movies.show', ['movie' => $movie->id]);


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
