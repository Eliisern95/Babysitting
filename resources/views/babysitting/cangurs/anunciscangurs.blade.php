@extends ('babysitting.cangurs.templatecangur')
@section ('content')

@foreach($anuncis as $anunci);
<div>
    <div>
        
        <h1>{{$anunci->titol}}</h1>           <h1>Preu</h1>

        <h2>{{$anunci->direcio</h2>

        <h3>Sóc una noia de Madrid a quí li agraden molt els nens</h3>

        <p>Hastags</p>
        
        <button bg-warning>Contacte</button>

    </div>
 
  
    
    
    
</div>
@endforeach

@stop