<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Immunization;
use Illuminate\Http\Request;

class ImmunizationController extends Controller
{
    public function index()
    {
        $child = Child::all();
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
