<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\ChildImun;
use App\Models\Immunization;
use Illuminate\Http\Request;

class ChildImunController extends Controller
{
    public function index($id_anak)
    {
        return view('pages\immunization\imunisasi2', [
            "title" => "Imunisasi",
            "imunchild" => ChildImun::all(),
            "id_anak" => Child::find($id_anak)
        ]);
    }

    public function create()
    {

        return view('pages/immunization/createimmunizationchild', [
            "title" => "Imunisasi",
            "id_anak" => 2,
            "imunisasi" => ChildImun::all(),
            "imunanak" => Immunization::all()

        ]);
    }

    public function store(Request $request)
    {
        ChildImun::create($request->except(['_token', 'submit']));
        return redirect('immunization/child');
        // dd($request->all());
    }
}
