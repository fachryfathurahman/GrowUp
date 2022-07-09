<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Immunization;
use Illuminate\Http\Request;

class ImmunizationController extends Controller
{
    public function index($id)
    {
        return view('pages/immunization/imunisasi', [
            "title" => "Imunisasi",
            "imunisasi" => Immunization::all(),
            "id" => Child::find($id)
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
        // Immunization::create($request->except(['_token', 'submit']));
        // return redirect('immunization');
    }
}
