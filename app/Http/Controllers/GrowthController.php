<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrowthRequest;
use App\Models\Growth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrowthController extends Controller
{
    public function update($child_id)
    {
        $growths=Growth::firstOrCreate([
            'child_id'=>$child_id    
        ]);
        return view('pages.growth', ['growths' => $growths]);
    }

    public function store($id,GrowthRequest $request)
    {
        Growth::find($id)->update($request->all());
        return redirect('/');
    }
}
