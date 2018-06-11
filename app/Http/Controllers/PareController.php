<?php

namespace App\Http\Controllers;
use App\Cangurs;
use Illuminate\Http\Request;

class PareController extends Controller
{
    //
    
 public function favorits(){
        
        return view ("babysitting.pares.favorits");
    }
    
  public function frontendpares(){
        $cangurs = Cangurs::all();
 
        return view ("babysitting.pares.frontendpares", compact ('cangurs'));
    }    
    
    
}
