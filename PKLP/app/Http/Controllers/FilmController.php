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

    public function anggota()
    {
        $anggota = DB::table('anggota')->get();
        return view('anggota',['anggota' =>$anggota]);
    }

    public function daftarfilm()
    {
        $daftarfilm = DB::table('daftarfilm')->get();
        return view('daftarfilm', ['daftarfilm' => $daftarfilm]);
    }

    public function hapus($id)
    {
        $anggota = DB::table('anggota')->where('id',$id)->delete();
        return redirect('/anggota');
    }

    public function hapusfilm($id)
    {
        $daftarfilm = DB::table('daftarfilm')->where('id',$id)->delete();
        return redirect('/daftarfilm');
    }

    public function search(Request $request)
    {
        if($request->has('search')) {
            $anggota = DB::table('anggota')->where('nama', 'LIKE', '%'.$request->search.'%')->get();
        }
        else {
            $anggota = DB::table('anggota')->all();
        }

        return view('anggota', ['anggota' => $anggota]);
    }

    public function searchfilm(Request $request)
    {
        if($request->has('search')) {
            $daftarfilm = DB::table('daftarfilm')->where('judul', 'LIKE', '%'.$request->search.'%')->get();
        }
        else {
            $daftarfilm = DB::table('daftarfilm')->all();
        }

        return view('daftarfilm', ['daftarfilm' => $daftarfilm]);
    }

    public function tambahanggota()
    {
        return view('tambahanggota');
    }

    public function tambahfilm()
    {
        return view('tambahfilm');
    }

    public function insertanggota(Request $request)
    {
        DB::table('anggota')->insert([
            'id' => $request->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
        ]);
        return redirect('/anggota')->with('success','Data berhasil ditambah');
    }

    public function insertfilm(Request $request)
    {
        $request->file('file')->storeAs('public',$request->id);

        DB::table('daftarfilm')->insert([
            'id' => $request->id,
            'judul' => $request->judul,
            'type' => $request->type,
            'genre' => $request->genre,
            'trailer' => $request->judul,
            'poster' => $request->id,
        ]);
        return redirect('/daftarfilm')->with('success','Data berhasil ditambah');
    }

    public function show($id)
    {
        $anggota = DB::table('anggota')->where('id',$id)->get();
        return view('updateanggota',['anggota' => $anggota]);
    }

    public function edit(Request $request)
    {
        DB::table('anggota')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email
        ]);
        return redirect('/anggota')->with('success','Data berhasil diubah');
    }

    public function editfilm(Request $request)
    {
        DB::table('daftarfilm')->where('id',$request->id)->update([
            'judul' => $request->judul,
            'type' => $request->type,
            'genre' => $request->genre
        ]);
        return redirect('/daftarfilm')->with('success','Data berhasil diubah');
    }

    public function showfilm($id)
    {
        $daftarfilm = DB::table('daftarfilm')->where('id',$id)->get();
        return view('updatefilm',['daftarfilm' => $daftarfilm]);
    }

    public function kategorifilm()
    {
        return view('kategorifilm');
    }
}
