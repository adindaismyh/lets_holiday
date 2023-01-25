<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\WisataModel;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = KategoriModel::all();
        $data = DB::table('wisata as w')
        ->join('kategori as k', 'w.kategori_id', '=', 'k.id')
        ->select('w.*', 'k.nama as nama_kategori')
        ->get();
        return view('admin.wisata.index', compact('data', 'kategori'));
    }
    public function detail_wisata($id)
    {
        $data = DB::table('wisata as w')
        ->join('kategori as k', 'k.id', '=', 'w.kategori_id')
        ->select('w.*', 'k.nama as kategori')
        ->where('w.id', $id)
        ->get();
        return view('user.detail', compact('data'));
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
        //Foto Utama
        $file_utama = $request->file('foto_utama');
        $nama_file_utama = time()."_".$file_utama->getClientOriginalName();
        $file_utama->move(public_path().'/foto_wisata/', $nama_file_utama);
        $name_utama = $nama_file_utama;
        
        //Foto 1
        $file_1 = $request->file('foto_1');
        $nama_file_1 = time()."_".$file_1->getClientOriginalName();
        $file_1->move(public_path().'/foto_wisata/', $nama_file_1);
        $name_1 = $nama_file_1;
        
        //Foto 2
        $file_2 = $request->file('foto_2');
        $nama_file_2 = time()."_".$file_2->getClientOriginalName();
        $file_2->move(public_path().'/foto_wisata/', $nama_file_2);
        $name_2 = $nama_file_2;
        
        //Foto 3
        $file_3 = $request->file('foto_3');
        $nama_file_3 = time()."_".$file_3->getClientOriginalName();
        $file_3->move(public_path().'/foto_wisata/', $nama_file_3);
        $name_3 = $nama_file_3;

        WisataModel::insert([
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'harga_tiket' => $request->harga_tiket,
            'fasilitas' => $request->fasilitas,
            'foto_utama' => $name_utama,
            'foto_1' => $name_1,
            'foto_2' => $name_2,
            'foto_3' => $name_3,
        ]);
        Alert::success('Success', 'Succes Add Wisata!');
        return redirect()->route('admin.wisata');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = KategoriModel::all();
        $data = DB::table('wisata as w')
        ->join('kategori as k', 'w.kategori_id', '=', 'k.id')
        ->select('w.*', 'k.nama as nama_kategori')
        ->where('w.id', $id)
        ->get();
        return view('admin.wisata.edit', compact('data', 'kategori'));
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
        if(!empty($request->foto_utama)){
            //Foto Utama
            $file_utama = $request->file('foto_utama');
            $nama_file_utama = time()."_".$file_utama->getClientOriginalName();
            $file_utama->move(public_path().'/foto_wisata/', $nama_file_utama);
            $name_utama = $nama_file_utama;
        }
        if(!empty($request->foto_1)){
            //Foto 1
            $file_1 = $request->file('foto_1');
            $nama_file_1 = time()."_".$file_1->getClientOriginalName();
            $file_1->move(public_path().'/foto_wisata/', $nama_file_1);
            $name_1 = $nama_file_1;
        }
        if(!empty($request->foto_2)){
           //Foto 2
            $file_2 = $request->file('foto_2');
            $nama_file_2 = time()."_".$file_2->getClientOriginalName();
            $file_2->move(public_path().'/foto_wisata/', $nama_file_2);
            $name_2 = $nama_file_2;
        }
        if(!empty($request->foto_3)){
            //Foto 3
            $file_3 = $request->file('foto_3');
            $nama_file_3 = time()."_".$file_3->getClientOriginalName();
            $file_3->move(public_path().'/foto_wisata/', $nama_file_3);
            $name_3 = $nama_file_3; 
        }

        WisataModel::where('id', $request->id)->update([
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'harga_tiket' => $request->harga_tiket,
            'fasilitas' => $request->fasilitas,
            'foto_utama' => (!empty($request->foto_utama) ? $name_utama : $request->foto_lama_utama),
            'foto_1' => (!empty($request->foto_1) ? $name_1 : $request->foto_lama_1),
            'foto_2' => (!empty($request->foto_2) ? $name_2 : $request->foto_lama_2),
            'foto_3' => (!empty($request->foto_3) ? $name_3 : $request->foto_lama_3),
        ]);
        Alert::success('Success', 'Succes Edit Wisata!');
        return redirect()->route('admin.wisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('wisata')->where('id', $id)->delete();
        Alert::error('Succes', 'Delete Succes');
        return redirect()->route('admin.wisata');
    }
}
