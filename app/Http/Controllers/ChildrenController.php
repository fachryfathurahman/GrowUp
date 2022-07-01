<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChildrenRequest;
use App\Models\Children;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildrenController extends Controller
{
    public function store(ChildrenRequest $request)
    {
        $data = $request->all();
        Children::create($data);
        return redirect()->route('pages.home');
    }

    public function edit($id)
    {
        $childs = Children::find($id);
        return view('pages.child_edit', ['childs' => $childs]);
    }

    public function update($id, ChildrenRequest $request)
    {
        Children::find($id)->update($request->all());
        return redirect()->route('pages.home');
    }
}
