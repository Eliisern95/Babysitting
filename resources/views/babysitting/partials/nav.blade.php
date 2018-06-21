<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--Font que m'he baixat per la barra de navegació: spacelab-->   
<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="navbar navbar-expand-lg navbar-dark">
    <img src="{{asset('imatges/xumet.jpg')}}" width="100px" height="100px">
    <p class="text-center col-lg-8" id="titol_inici">Benvinguts a Babysitting</p>
    <!--Si es cangur -->


    @guest
    <div class="nav-item dropdown col-lg-4">
       <a class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            La secció de l'Usuari
        </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" href="{{ route('login') }}">
                Entra
            </a>
            <a class="dropdown-item" href="{{ route('parecangur') }}">
                Registre't
            </a>
        </div>
    </div>
    
    @else
    
    <div class="nav-item dropdown col-lg-4">
       <a class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" href="{{ route('logout') }}">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    @endguest
</nav> 


