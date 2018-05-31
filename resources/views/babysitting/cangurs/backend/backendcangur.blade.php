@extends ('babysitting.cangurs.templatecangur')
@section ('content')


    @foreach($anuncis as $anunci);
<div>
    <div>
        
        <h1>{{$anunci->titol}}</h1>           

        <h3>{{$anunci->descripcio}}</h3>
         
        <h1>{{$anunci->preu}}</h1>
        <a class="btn btn-outline-danger btn-sm"  href="" aria-haspopup="true" aria-expanded="false">CREA EL TEU ANUNCI</a>
      </div>
    </div>
    
@endforeach
@endsection