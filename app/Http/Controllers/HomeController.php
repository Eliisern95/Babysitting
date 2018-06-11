<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cangurs;
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
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $tipus = auth()->user()->tipus;

        if ($tipus == 'P') {
            $cangurs = Cangurs::all();
      
            return view('babysitting/pares/frontendpares', compact ('cangurs'));
        } else {
            return view('babysitting/cangurs/frontendcangur');
        }
    }

}
