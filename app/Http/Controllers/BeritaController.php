<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('berita as b')
        ->join('users as u', 'b.penulis_id', '=', 'u.id')
        ->select('b.*', 'u.name as nama')
        ->get();
        return view('admin.berita.index', compact('data'));
    }
    public function blog()
    {
        $data = DB::table('berita as b')
        ->join('users as u', 'b.penulis_id', '=', 'u.id')
        ->select('b.*', 'u.name as nama')
        ->get();
        return view('user.blog', compact('data'));
    }
    public function detailberita($id)
    {
        $data = DB::table('berita as b')
        ->join('users as u', 'b.penulis_id', '=', 'u.id')
        ->select('b.*', 'u.name as nama')
        ->where('b.id', $id)
        ->get();
        return view('user.blogdetails', compact('data'));
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
        $file->move(public_path().'/foto_berita/', $nama_file);
        $name = $nama_file;

        BeritaModel::insert([
            'penulis_id' => Auth::user()->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'foto' => $name
        ]);
        Alert::success('Success', 'berhasil menambahkan Berita!');
        return redirect()->route('admin.berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('berita as b')
        ->join('users as u', 'b.penulis_id', '=', 'u.id')
        ->select('b.*', 'u.name as nama')
        ->where('b.id', $id)
        ->get();
        return view('admin.berita.edit', compact('data'));
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
            $file->move(public_path().'/foto_berita/', $nama_file);
            $name = $nama_file;  
        }

        BeritaModel::where('id', $request->id)->update([
            'penulis_id' => Auth::user()->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'foto' => (!empty($request->foto) ? $name : $request->foto_lama)
        ]);
        Alert::success('Success', 'Succes Edit Berita!');
        return redirect()->route('admin.berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('berita')->where('id', $id)->delete();
        Alert::error('Succes', 'Delete Succes');
        return redirect()->route('admin.berita');
    }
}
