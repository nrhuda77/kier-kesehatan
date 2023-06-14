<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data-pelamar.index',[
            'pelamar' => Pelamar::latest()->get(),
            'title' => 'Selamat Datang Admin Dinas Kesehatan Kota Balikpapan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
 
        $validasiData = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|max:255',
            'tekanan_darah' => 'required',
            'per_tekanan_darah' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'suhu_tubuh' => 'required',
            'buta_warna' => 'required',
            ]);

if ( $validasiData) {
    Pelamar::create($validasiData);
    return redirect('/data')->with('success', 'Data berhasil di input!') ;
}
return back()->with('error', 'Data berhasil di input!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelamar $pelamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelamar $pelamar, )
    {
        $id = $request->id;
    $rules = [
        'nama' => 'required',
        'umur' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required|max:255',
        'tekanan_darah' => 'required',
        'per_tekanan_darah' => 'required',
        'berat_badan' => 'required',
        'tinggi_badan' => 'required',
        'suhu_tubuh' => 'required',
        'buta_warna' => 'required',
        ];
    
          $validatedData = $request->validate($rules);

    Pelamar::where('id', $id)->Update($validatedData);
    
    return redirect('/data')->with('success', 'Data berhasil di updated!');
    
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelamar $pelamar,$id)
    {
        Pelamar::destroy($id);
        return redirect('/data')->with('success', ' data berhasil di hapus!');
    }

    public function ajax_edit($id){
        $pelamar = Pelamar::find($id);
           return json_encode($pelamar);
   
   
       }
   
       public function ajax_detail($id){
        $pelamar = Pelamar::where(['id'=> $id])->first();
           //return Response::json($pelamar);
           return json_encode($pelamar);
       }
}
