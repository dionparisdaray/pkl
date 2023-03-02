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
        $data = DB::table('data')->where('tahunmasuk',$id)->get();
        return view('daftaralumni',['data' => $data]);
    }

    public function cariprodi($id)
    {
        $data = DB::table('data')->where('prodi',$id)->get();
        return view('daftaralumni',['data' => $data]);
    }

    public function carinim($id)
    {
        $data = DB::table('data')->where('nim',$id)->get();
        return view('daftaralumni',['data' => $data]);
    }

    public function carinama(Request $request)
	{
		// menangkap data pencarian
		$carinama = $request->carinama;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$data = DB::table('data')
		->where('nama','like',"%".$carinama."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('daftaralumni',['data' => $data]);
 
	}
}
