@extends ('babysitting.template')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registre') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                </div>
            </div>
        </div>
    </div>
    
</div>

<html>
    <meta>
    <title>Llista Cangurs</title>
    
    <!--Columna de CANGURS-->
    <h1>Cangurs</h1>
    <!--Titol de l'anunci-->
    <h2>Monitor de lleure, Grau Superior d'educació infantil</h2>
    <!--Localització de la persona-->
    <h2>Cangur de Barcelona</h2>
    <!--Descripció de l'anunci-->
    <h2>Monitora perfecte pels teus nens</h2>
    <!--Hashtags-->
    <h2>#Cuidado de nens</h2>
    

    
</html>
