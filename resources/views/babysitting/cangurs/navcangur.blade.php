<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--Font que m'he baixat per la barra de navegació: spacelab-->   
<nav class="navbar navbar-expand-lg navbar-dark" id="nav-cangur">
    <img src="{{asset('imatges/kangaroo_1.png')}}" width="100px" height="100px">
    <p class="text-center col-lg-9" id="titol_inici_cangur">Benvingut a Babysitting Cangur!</p>
   


    @guest
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item1 m-4">
                
                <a class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"  href="{{ route('parecangur') }}" aria-haspopup="true" aria-expanded="false">
                    Registre't
                </a>           
            </li>
            <li class="nav-item2 m-4">
                <div class="dropdown">
                    <a class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split btn-sm" href="{{ route('login') }}"   aria-haspopup="true" aria-expanded="false">
                        Entra
                    </a>

                </div>
            </li>
        </ul>
    </div>
    @else
    
    <div class="nav-item dropdown">
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
