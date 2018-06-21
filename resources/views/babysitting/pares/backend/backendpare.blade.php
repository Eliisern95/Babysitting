@extends ('babysitting.pares.templatepare')
@section ('content')

@foreach($anuncis as $anunci)
    <div class="d-flex justify-content-center">
      <div class="col-6 col-md-4">
          
            <h1>{{$anunci->titol}}</h1>           

            <h3>{{$anunci->descripcio}}</h3>

            <h1>{{$anunci->preu}}</h1>
            <button type="button" class="btn btn-success">Contacte</button>

      </div>
    </div>
@endforeach
@stop



