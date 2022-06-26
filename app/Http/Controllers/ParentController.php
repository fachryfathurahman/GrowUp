<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParentController extends Controller
{
    public function registration(){
        return view('registration');
    }

    public function add(Request $request){
        DB::table('parent')->insert([
            'name'=>$request->namaAyah,
            'age'=>$request->umurAyah,
            'phone'=>$request->telpAyah,
            'email'=>$request->emailAyah
        ]);
        DB::table('parent')->insert([
            'name'=>$request->namaIbu,
            'age'=>$request->umurIbu,
            'phone'=>$request->telpIbu,
            'email'=>$request->emailIbu
        ]);
        return redirect('/');
    }
}
