<?php

namespace App\Http\Controllers;

use App\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
      $directors = Director::get();
      return view('directors/index', ['directors' => $directors]);
    }


    public function create()
    {
        return view('directors/create');
    }


    public function register(Request $request)
    {
      $director = new Director();
      $director->name= $request->input('name');
      $director->id=$request->input('id');

      $director->save();

      return redirect()->route('directors.index');
    }


    public function show(Director $director)
    {
        return view('directors/show',  ['director' => $director]);
    }


    public function edit(Director $director)
    {

        return view('directors/edit', ['director' => $director]);
    }


    public function update(Request $request, Director $director)
    {

      $director_name = $request->input('name');

      $director->name = $director_name;
      $director->updated_at = now();
      $director->save();


      return redirect()->route('directors.show', ['director' => $director->id]);
    }

    public function delete(Director $director)
    {
        $director->delete();

        return $this->index();
    }
}
