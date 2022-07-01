<?php

namespace App\Http\Controllers;

use App\Models\Children;
use App\Models\Immunization;
use Illuminate\Http\Request;

class ImmunizationController extends Controller
{
    public function index()
    {
        $child = Children::all();
        $immunization = Immunization::all();
        return view('immunization2', [
            "child" => $child,
            "immunization" => $immunization,
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
        // Immunization::create($request->except(['_token', 'submit']));
        // return redirect('immunization');
    }
}
