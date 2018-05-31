<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return view('babysitting/pares/frontendpares');
        } else {
            return view('babysitting/cangurs/frontendcangur');
        }
    }

}
