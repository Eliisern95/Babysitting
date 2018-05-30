<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CangurController extends Controller
{
    public function index(){
        return view ("babysitting.cangurs.anunciscangurs");
    }
    
       public function frontendcangur(){
        return view ("babysitting.cangurs.frontendcangur");
    }
    
       public function backendcangur(){
        return view ("babysitting.cangurs.backend.backendcangur");
    }
    
      
    
    
}
