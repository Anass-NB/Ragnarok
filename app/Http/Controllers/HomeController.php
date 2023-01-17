<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Postulation;
use Illuminate\Http\Request;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        

        $formations_postules = DB::table('users')
        ->join('postulations', 'users.id', '=', 'postulations.user_id')
        ->select('postulations.formation_id')
        ->get();

        $all_ids_formation=  DB::table('formations')
        ->where("id", "!=",)
        ->get();


        return view('home')->with([
            "formations" => Formation::all(),
            "postulation" => $formations_postules,
        ]);
        
    }
    public function postuler (Request $request){
        Postulation::create([
            "user_id" => auth()->user()->id,
            "formation_id" => $request->formation_id,
        ]);
        return redirect()->route("home");

    }
    
}
