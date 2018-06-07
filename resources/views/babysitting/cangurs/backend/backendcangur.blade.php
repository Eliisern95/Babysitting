@extends ('babysitting.cangurs.templatecangur')
@section ('content')


@foreach($anuncis as $anunci);
    <div class="d-flex justify-content-center">
      <div class="col-6 col-md-4">

            <h1>{{$anunci->titol}}</h1>           

            <h3>{{$anunci->descripcio}}</h3>

            <h1>{{$anunci->preu}}</h1>

            <!--   <a class="btn btn-outline-danger btn-sm"  href="{{Route('backendcangur.create')}}" aria-haspopup="true" aria-expanded="false"><i class='fa fa-user'></i>CREA EL TEU ANUNCI</a>-->
            <a href="{{route('backendcangur.edit', $anunci->id)}}"><button type="button" class="btn btn-warning"><i class ='fa fa-pencil-square'></i>EDITA EL TEU ANUNCI</button></a>

            <!--Funció de destroy-->

            {!! Form::open(['route' => ['backendcangur.destroy', $anunci->id]]) !!}
            <input type="hidden" name="_method" value="DELETE">
            <button onClick="return confirm('Eliminar anunci?')" class="btn btn-danger">
                <i class="fa fa-trash-o">ELIMINA EL TEU ANUNCI</i>
            </button>
            {!! Form::close() !!}

          <a href="{{route('backendcangur.create')}}"><button type="button" class="btn btn-success" id="contacte"><i class="fa fa-check">CONTACTE'M!</i></button></a>
            

        </div>
    </div>

@endforeach
@endsection