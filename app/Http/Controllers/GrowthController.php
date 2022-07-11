<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrowthRequest;
use App\Models\Growth;
use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class GrowthController extends Controller
{
    public function update($child_id)
    {
        $growths=Growth::firstOrCreate([
            'child_id'=>$child_id    
        ]);
        $child = Child::find($child_id);
        $birthday  = new DateTime($child['birthday']);
        $currenttime = new DateTime();
        $age = $currenttime->diff($birthday)->format("%a") / 30;
        return view('pages.growth', ['growths' => $growths,'age'=>(int)$age]);
    }

    public function store($id,Request $request)
    {
        Growth::find($id)->update($request->all());
        return redirect('/');
    }
}
