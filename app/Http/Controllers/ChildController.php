<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildController extends Controller
{
    public function add(Request $request){
        DB::table('child')->insert([
            'name'=>$request->nama,
            'age'=>$request->umur,
            'gender'=>$request->jenis_kelamin,
            'birthday'=>$request->tgl_lahir,
            'asi'=>$request->asi
        ]);
        return redirect('/home');
    }
}
