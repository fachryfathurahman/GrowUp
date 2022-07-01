<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChildRequest;
use App\Models\Childs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildController extends Controller
{
    public function add(ChildRequest $request)
    {
        $data = $request->all();
        Childs::create($data);
        return redirect('/home');
    }

    public function edit($id)
    {
        $childs = Childs::find($id);
        return view('child_edit', ['childs' => $childs]);
    }

    public function update($id, ChildRequest $request)
    {
        Childs::find($id)->update($request->all());
        return redirect('/home');
    }
}
