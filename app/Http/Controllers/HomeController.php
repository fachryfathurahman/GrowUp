<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Childs;
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
        $childs = Childs::all();
        foreach($childs as $child){
            $birthday=$child['birthday'];
            date_diff(date_create(date('Y-m-d')),date_create($birthday));
            //return $birthday;
        }
        
        return view('home',['childs' => $childs]);
    }
}
