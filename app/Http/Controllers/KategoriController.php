<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KategoriModel::all();
        return view('admin.kategori.index', compact('data'));
    }
    public function detail_kategori($id)
    {
        $data = DB::table('wisata as w')
        ->join('kategori as k', 'w.kategori_id', '=', 'k.id')
        ->select('w.*', 'k.nama as kategori')
        ->where('w.kategori_id', $id)
        ->get();
        return view('user.detailkategori', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Foto
        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move(public_path().'/foto_kategori/', $nama_file);
        $name = $nama_file;

        KategoriModel::insert([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $name
        ]);
        Alert::success('Success', 'Succes Add Kategori!');
        return redirect()->route('admin.kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('kategori')
        ->where('id', $id)
        ->get();
        return view('admin.kategori.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(!empty($request->foto)){
            $file = $request->file('foto');
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/foto_kategori/', $nama_file);
            $name = $nama_file;  
        }

        KategoriModel::where('id', $request->id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => (!empty($request->foto) ? $name : $request->foto_lama)
        ]);
        Alert::success('Success', 'Succes Edit Kategori!');
        return redirect()->route('admin.kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id', $id)->delete();
        Alert::error('Succes', 'Delete Succes');
        return redirect()->route('admin.kategori');
    }
    public function kategori_user()
    {
        $data = KategoriModel::all();
        return view('user.kategoriwisata', compact('data'));
    }
}
