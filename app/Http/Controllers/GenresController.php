<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genres;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
class GenresController extends Controller
{
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
        $genres = Genres::all();
        return view('genres.index')->with('genres', $genres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genres.create');
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
            'name' => 'required|min:5|max:10',
        ]);

        $genres = new Genres();
        $genres->name = $request->input('name');
        $genres->save();

        return redirect('/genres')->with('success', 'Genre added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genres = Genres::find($id);
        return view('genres.show')->with('genre', $genres);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genres::find($id);
        return view('genres.edit', compact('genre','id'));
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
        $genre = Genres::find($id);
        $genre->name = $request->get('name');
        $genre->save();
        return redirect('/genres')->with('success', 'Genre edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genres::find($id);
        $genre->delete();
        return redirect('/genres')->with('success', 'Genre deleted!');
    }
}
