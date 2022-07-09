<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\ChildImun;
use App\Models\Immunization;
use Illuminate\Http\Request;

class ChildImunController extends Controller
{
    public function index($id)
    {
        $id_anak = Child::find($id);
        return view('pages\immunization\imunisasi2', [
            "title" => "Imunisasi",
            "imunchild" => ChildImun::all(),
            "id_anak" => $id_anak
        ]);
    }

    public function create($id)
    {
        $id_anak = Child::find($id);
        return view('pages/immunization/createimmunizationchild', [
            "title" => "Imunisasi",
            "imunisasi" => ChildImun::all(),
            "imunanak" => Immunization::all(),
            "id_anak" => $id_anak

        ]);
    }

    public function store(Request $request)
    {
        ChildImun::create($request->except(['_token', 'submit']));
        return redirect('/');
        // dd($request->all());
    }
}
