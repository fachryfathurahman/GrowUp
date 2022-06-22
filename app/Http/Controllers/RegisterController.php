<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function show(){
    	$data_keluarga=DB::table('data_keluarga')->get();
        return view('home',['data_keluarga' => $data_keluarga]);
    }

    public function save(Request $request){
        
        DB::table('data_anak')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'panjang' => $request->panjang,
            'berat' => $request->berat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'status_imunisasi' => $request->status_imunisasi,
            'asi' => $request->asi
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/home');
    }
}
