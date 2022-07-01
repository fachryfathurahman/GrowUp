<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Immunization;
use App\Models\TypeOfImmunization;
use Illuminate\Http\Request;

class TypeOfImmunizationController extends Controller
{
    public function index()
    {
        return view('immunization', [
            // "child" => Child::all(),
            "typeofimmunization" => TypeOfImmunization::all(),
            "immunization" => Immunization::all(),
        ]);
    }
}
