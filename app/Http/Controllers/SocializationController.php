<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocializationController extends Controller
{
    public function prevention(){
        return view('layouts.prevention');
    }
    public function cause(){
        return view('layouts.cause');
    }
    public function definition(){
        return view('layouts.definition');
    }
    public function impact(){
        return view('layouts.impact');
    }
}
