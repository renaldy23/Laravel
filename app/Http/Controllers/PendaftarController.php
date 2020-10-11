<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pendaftar;
use App\Sekolah;

class PendaftarController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    public function index()
    {
        $pendaftar = Pendaftar::orderBy('nisn' , 'asc')->simplePaginate(5);
        return view('pendaftar.index' , compact('pendaftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sekolah = Sekolah::all();
        return view('pendaftar.create' ,compact('sekolah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn'=>'required|unique:pendaftar',
            'nama'=>'required',
            'no_hp'=>'required|max:12',
            'alamat'=>'required',
            'nem'=>'required',
        ]);

        Alert::success('Success');

        Pendaftar::create([
            'nisn'=>$request->nisn,
            'sekolah_id'=>$request->sekolah,
            'nama'=>$request->nama,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat,
            'nem'=>$request->nem
        ]);

        return redirect('/pendaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendaftar = Pendaftar::find($id);
        return view('pendaftar.show' , compact('pendaftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftar = Pendaftar::find($id);
        return view('pendaftar.edit' , compact('pendaftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'nisn'=>'required',
            'nama'=>'required',
            'no_hp'=>'required|max:12',
            'alamat'=>'required',
            'nem'=>'required',
        ]);
        
        Alert::success('Update Success');

        $pendaftar = Pendaftar::find($id);
        
        $pendaftar->update([
            'nisn'=> $request->nisn,
            'nama'=> $request->nama,
            'no_hp'=> $request->no_hp,
            'alamat'=> $request->alamat,
            'nem'=>$pendaftar->nem
        ]);
        $pendaftar->save();

        return redirect('/pendaftar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::warning('Successfuly Delete');
        Pendaftar::find($id)->delete();
        return redirect('/pendaftar');
    }

    public function profile(){
        return view('pendaftar.profile');
    }
}
