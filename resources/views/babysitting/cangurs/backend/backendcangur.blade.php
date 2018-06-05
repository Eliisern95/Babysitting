@extends ('babysitting.cangurs.templatecangur')
@section ('content')


    @foreach($anuncis as $anunci);
<div>
    <div>
        
        <h1>{{$anunci->titol}}</h1>           

        <h3>{{$anunci->descripcio}}</h3>
         
        <h1>{{$anunci->preu}}</h1>
        <a class="btn btn-outline-danger btn-sm"  href="{{Route('backendcangur.create')}}" aria-haspopup="true" aria-expanded="false"><i class='fa fa-user'></i>CREA EL TEU ANUNCI</a>
        <a href="{{route('backendcangur.edit', $anunci->id)}}"><button type="button" class="btn btn-warning"><i class ='fa fa-pencil-square'></i>EDITA EL TEU ANUNCI</button></a>
        <a href="{{route('backendcangur.create', $anunci->id)}}"><button type="button" class="btn btn-danger"><i class ='fa fa-times-circle'></i>ELIMINA EL TEU ANUNCI</button></a>
    </div>
    </div>
    
@endforeach
@endsection