<?php

namespace App\Http\Controllers;
use App\Cangurs;
use App\Consells;
use App\AnuncisCangurs;
use Illuminate\Http\Request;

class PareController extends Controller
{
    //
    
 public function favorits(){
        
        return view ("babysitting.pares.favorits");
    }
    
  public function frontendpares(){
        $cangurs = Cangurs::all();
        $consells = Consells::all();
        return view ("babysitting.pares.frontendpares", compact ('cangurs'), compact('consells'));
    }

public function backendpare(){
         $anuncis = \App\AnuncisCangurs::all();
    return view ("babysitting.pares.backend.backendpare", compact('anuncis'));
}   
    
    
}
