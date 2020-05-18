<?php

namespace App\Http\Controllers;

use App\Exports\FilmExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use App\Http\Controllers\Controller;
use App\DataTables\filmDataTable;
use DataTables;
use PDF;
use App\film;

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
            $data = \App\film::where('judul_film', 'LIKE', '%'.$request->cari.'%')->paginate();
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
        $this->validate($request,[
            'kode_film' => 'required|min:2|unique:film',
            'judul_film' => 'required|min:1',
            'harga' => 'required',
            'status' => 'required',
            'picture' => 'mimes:jpeg,png'
        ]);
        
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

        $this->validate($request,[
            'picture' => 'mimes:jpeg,png',
        ]);

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
    
    function getdatafilm()
    {
        $film = \App\film::select('film.*');

        return \DataTables::eloquent($film)
        ->addColumn('aksi', function($f){
            return '
            <a href="/film/'.$f->id.'/detail" class="btn btn-success btn-sm">Detail</a>
            <a href="/film/'.$f->id.'/edit" class="btn btn-warning btn-sm">Edit</a>
            <a href="/film/'.$f->id.'/destroy" class="btn btn-danger btn-sm">Delete</a>
            ';
        })
        ->rawColumns(['aksi'])
        ->toJson();
    }

    public function export_excel()
    {
        return Excel::download(new FilmExport, 'films.xlsx');
    }

    public function cetak_pdf()
    {
    	$film = \App\Film::all();
 
    	$pdf = PDF::loadview('film.film_pdf',['film'=>$film]);
    	return $pdf->download('list-film-pdf');
    }

}
