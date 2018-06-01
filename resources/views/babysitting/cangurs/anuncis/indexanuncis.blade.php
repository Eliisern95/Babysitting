@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Llista d'anuncis</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('AnuncisCangurs.create') }}" class="btn btn-info" >AfegirAnunci</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Titol</th>
               <th>Descripció</th>
               <th>Preu</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($AnuncisCangurs->count()) { 
              @foreach($AnuncisCangurs as $anuncis)  
              <tr>
                <td>{{$AnuncisCangurs->titol}}</td>
                <td>{{$AnuncisCangurs->descripcio}}</td>
                <td>{{$AnuncisCangurs->preu}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('AnuncisCrudController@edit', $AnuncisCangurs->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('AnuncisCrudController@destroy', $AnuncisCangurs->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hi ha registre !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $libros->links() }}
    </div>
  </div>
</section>
 
@endsection
