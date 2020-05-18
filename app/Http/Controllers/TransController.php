<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\TransExport;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Mail\WarnMail;
use Illuminate\Support\Facades\Mail;

class TransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data1 = \App\trans::where('judul_film', 'LIKE', '%'.$request->cari.'%')->get();
        }else {
            $data1 = \App\trans::all();
        }
        return view('transaksi.index',['data1' => $data1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $transaction =  \App\trans::create($request->all());
        return redirect('/transaction')->with('sukses','Data Berhasil di input');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaction = \App\trans::find($id);
        return view('transaksi/edit',['transaction' => $transaction]);
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
        $transaction = \App\trans::find($id);
        $transaction->update($request->all());
        if($request->hasFile('picture')){
            $request->file('picture')->move('images/',$request->file('picture')->getClientOriginalName());
            $transaction->picture = $request->file('picture')->getClientOriginalName();
            $transaction->save();
        }
        return redirect('/transaction')->with('sukses','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = \App\trans::find($id);
        $transaction->delete($transaction);
        return redirect('/transaction')->with('sukses', 'Data Berhasil di hapus!');
    }

    public function export_excel()
	{
		return Excel::download(new TransExport, 'Transaksi.xlsx');
    }
    
    public function cetak_pdf()
    {
    	$trans = \App\Trans::all();
 
    	$pdf = PDF::loadview('transaksi.trans_pdf',['trans'=>$trans]);
    	return $pdf->download('list-transaksi-pdf');
    }

    public function email($email)
    {
        $trans = \App\Trans::find($email);
        Mail::to($trans)->send(new WarnMail());
 
		return response()->json("Email send successfully!");
    }
}
