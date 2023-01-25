<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->roleuser == 'Admin') {
            return view('admin.home');
        } else {
            $data = DB::table('wisata as w')
            ->join('kategori as k', 'k.id', '=', 'w.kategori_id')
            ->select('w.*', 'k.nama as kategori')
            ->get();
            return view('home', compact('data'));
        }
    }
    public function admin()
    {
        return view('admin.home');
    }
}
