<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Children;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('aut   h');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $childs = Children::all();
        $age = date('Y-m-d');
        return view('home', ['childs' => $childs, 'age' => $age]);
    }
}
