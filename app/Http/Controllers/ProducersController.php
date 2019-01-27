<?php

namespace App\Http\Controllers;

use App\Producers;
use Illuminate\Http\Request;
use Http\Requests;
use App\Model;
class ProducersController extends Controller
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
        $producers = Producers::all();
        return view('producers.index')->with('producers', $producers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producers.create');
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
            'name' => 'required|min:5|max:50',
        ]);

        $producers = new Producers();
        $producers->name = $request->input('name');
        $producers->save();

        return redirect('/producers')->with('success', 'Producer added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producers = Producers::find($id);
        return view('producers.show')->with('producer', $producers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producer = Producers::find($id);
        return view('producers.edit', compact('producer','id'));
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
        $producer = Producers::find($id);
        $producer->name = $request->get('name');
        $producer->save();
        return redirect('/producers')->with('success', 'Producer edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producer = Producers::find($id);
        $producer->delete();
        return redirect('/producers')->with('success', 'Producer deleted!');
    }
}
