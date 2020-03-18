<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data = \App\film::where('judul_film', 'LIKE', '%'.$request->cari.'%')->get();
        }else {
            $data = \App\film::all();
        }
        return view('film.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
       $film =  \App\Film::create($request->all());
        return redirect('/film')->with('sukses','Data Berhasil di input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = \App\film::find($id);
        return view("film.show", ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = \App\Film::find($id);
        return view('film/edit',['film' => $film]);
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
        $film = \App\film::find($id);
        $film->update($request->all());
        if($request->hasFile('picture')){
            $request->file('picture')->move('images/',$request->file('picture')->getClientOriginalName());
            $film->picture = $request->file('picture')->getClientOriginalName();
            $film->save();
        }
        return redirect('/film')->with('sukses','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = \App\film::find($id);
        $film->delete($film);
        return redirect('/film')->with('sukses', 'Data Berhasil di hapus!');
    }
}
