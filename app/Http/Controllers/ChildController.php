<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChildRequest;
use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildController extends Controller
{
    public function add(ChildRequest $request)
    {
        $data = $request->all();
        Child::create($data);
        return redirect()->route('layouts.dashboard');
    }

    public function edit($id)
    {
        $childs = Child::find($id);
        return view('pages.child_edit', ['childs' => $childs]);
    }

    public function update($id, ChildRequest $request)
    {
        Child::find($id)->update($request->all());
        return redirect()->route('layouts.dashboard');
    }
}
