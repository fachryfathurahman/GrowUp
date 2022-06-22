<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index(){
    	$data_keluarga=DB::table('data_keluarga')->get();
        return view('home',['data_keluarga' => $data_keluarga]);
    }
}
