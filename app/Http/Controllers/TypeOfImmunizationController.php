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
        $typeofimmunization = TypeOfImmunization::all();
        $immunization = Immunization::all();
        return view('pages.immunization', [
            'typeofimmunization' => $typeofimmunization,
            'immunization' => $immunization
        ]);
    }
}
