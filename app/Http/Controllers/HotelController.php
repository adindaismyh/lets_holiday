<?php

namespace App\Http\Controllers;

use App\Models\HotelModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HotelModel::all();
        return view('admin.hotel.index', compact('data'));
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
        $file->move(public_path().'/foto_hotel/', $nama_file);
        $name = $nama_file;

        HotelModel::insert([
            'nama' => $request->nama,
            'letak' => $request->letak,
            'harga_hotel' => $request->harga_hotel,
            'fasilitas' => $request->fasilitas,
            'deskripsi' => $request->deskripsi,
            'foto' => $name
        ]);
        Alert::success('Success', 'Succes Add Hotel!');
        return redirect()->route('admin.hotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('hotel')
        ->where('id', $id)
        ->get();
        return view('admin.hotel.edit', compact('data'));
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
            $file->move(public_path().'/foto_hotel/', $nama_file);
            $name = $nama_file;
        }

        HotelModel::where('id', $request->id)->update([
            'nama' => $request->nama,
            'letak' => $request->letak,
            'harga_hotel' => $request->harga_hotel,
            'fasilitas' => $request->fasilitas,
            'deskripsi' => $request->deskripsi,
            'foto' => (!empty($request->foto) ? $name : $request->foto_lama)
        ]);
        Alert::success('Success', 'Succes Edit Hotel!');
        return redirect()->route('admin.hotel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('hotel')->where('id', $id)->delete();
        Alert::error('Succes', 'Delete Succes');
        return redirect()->route('admin.hotel');
    }
}
