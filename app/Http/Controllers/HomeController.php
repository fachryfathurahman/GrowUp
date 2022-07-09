<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use App\Models\Growth;
use Illuminate\Support\Facades\DB;
use DateTime;

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
        $ages = array();
        $zscore = array();
        $childs = Child::all();
        $growths = Growth::all();

        foreach ($childs as $child) {
            $birthday  = new DateTime($child['birthday']);
            $currenttime = new DateTime();
            $age = $currenttime->diff($birthday)->format("%a") / 30;
            array_push($ages, (int)$age);
        }

       


        return view('pages.child.index', ['childs' => $childs, 'ages' => $ages, 'growths'=>$growths]);
    }
}
