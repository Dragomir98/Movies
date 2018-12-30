<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class MoviesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::orderBy('created_at', 'asc')->paginate(10);
        return view('movies.index')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'yearOfProduction' => 'required',
            'producer' => 'required',
            'genre' => 'required',
            'language' => 'required'
        ]);

        $movies = new Movies;
        $movies->name = $request->input('name');
        $movies->yearOfProduction = $request->input('yearOfProduction');
        $movies->producer = $request->input('producer');
        $movies->genre = $request->input('genre');
        $movies->language = $request->input('language');
        $movies->user_id = auth()->user()->id;
        $movies->save();

        return redirect('/movies')->with('success', 'Movie created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = Movies::find($id);
        return view('movies.show')->with('movie', $movies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movies::find($id);
        if(auth()->user()->id !==$movies->user_id)
        {
            return redirect('/movies')->with('error', 'Unauthorized Page');
        }
        return view('movies.edit')->with('movie', $movies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'yearOfProduction' => 'required',
            'producer' => 'required',
            'genre' => 'required',
            'language' => 'required'
        ]);

        $movies = Movies::find($id);
        $movies->name = $request->input('name');
        $movies->yearOfProduction = $request->input('yearOfProduction');
        $movies->producer = $request->input('producer');
        $movies->genre = $request->input('genre');
        $movies->language = $request->input('language');
        $movies->save();

        return redirect('/movies')->with('success', 'Movie updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movies = Movies::find($id);

        if(auth()->user()->id !==$movies->user_id)
        {
            return redirect('/movies')->with('error', 'Unauthorized Page');
        }

        $movies->delete();
        return redirect('/movies')->with('success', 'Movie Deleted');
    }
}
