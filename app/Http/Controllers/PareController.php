<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PareController extends Controller
{
    //
    
 public function favorits(){
        
        return view ("babysitting.pares.favorits");
    }
    
  public function frontendpares(){
        
        return view ("babysitting.pares.frontendpares");
    }    
    
    
}
