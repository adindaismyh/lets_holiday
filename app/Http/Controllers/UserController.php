<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $data = DB::table('wisata as w')
            ->join('kategori as k', 'k.id', '=', 'w.kategori_id')
            ->select('w.*', 'k.nama as kategori')
            ->orderBy('w.id')
            ->get();
            return view('home', [
                'data' => DB::table('wisata')->paginate(6)]);

    }
    public function index($id)
    {
        $data = DB::table('users')
        ->select('*')
        ->where('id', $id)
        ->get();
        return view('user.akun', compact('data'));
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
        if(!empty($request->foto)){
            $file = $request->file('foto');
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/foto_berita/', $nama_file);
            $name = $nama_file;  
        }
 
        User::where('id', $request->id)->update([
            'email' => $request->email,
            'name' => $request->name,
            'nomer_telfon' => $request->nomer_telfon,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'foto' => (!empty($request->foto) ? $name : $request->foto_lama)
        ]);
        Alert::success('Success', 'Succes Update Profile!');
        return redirect()->route('home');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
