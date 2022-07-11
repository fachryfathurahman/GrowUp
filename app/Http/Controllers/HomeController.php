<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use App\Models\Growth;
use Illuminate\Support\Facades\DB;
use DateTime;
use Auth;

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
        $user_id=Auth::user()->id;
        $childs = Child::with('growth')->get();
        //$growths = Growth::all();

        $ages = array();
        $zscore = array();
        foreach ($childs as $child) {
            $birthday  = new DateTime($child['birthday']);
            $currenttime = new DateTime();
            $age = $currenttime->diff($birthday)->format("%a") / 30;
            array_push($ages, (int)$age);
        }
        return view('pages.child.index', ['childs' => $childs, 'ages' => $ages]);
    }
}
