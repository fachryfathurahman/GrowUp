<?php

namespace App\Http\Controllers;

use App\Models\Immunization;
use Illuminate\Http\Request;

class ImmunizationController extends Controller
{
    public function index()
    {

        return view('immunization2', [
            "id_child" => 1,
            "immunization" => Immunization::all(),
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
        // Immunization::create($request->except(['_token', 'submit']));
        // return redirect('immunization');
    }
}
