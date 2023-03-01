<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function data()
    {
        $data = DB::table('data')->get();
        return view('daftaralumni',['data' =>$data]);
    }

    public function tampil()
    {
        return view('alumni');
    }

    public function dosen()
    {
        return view('dosen');
    }

    public function cari($id)
    {
        $data = DB::table('data')->where('nim',$id)->get();
        return view('daftaralumni',['data' => $data]);
    }
}
