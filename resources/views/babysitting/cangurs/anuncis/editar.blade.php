@extends('layouts.layout')
@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-info">
                {{Session::get('success')}}
            </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nou Anunci</h3>
                </div>
                <div class="panel-body">
                    <div class="table-containder">
                        <form method="POST" action="{{ route('anunciscangur.update',$AnuncisCangur->id)}}" role="form">
                            {{ csrf_field() }}      
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="titol" id="titol" class="form-control input-sm" value="{{$AnuncisCangur->titiol}}">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="descripcio" id="descripcio" class="form-control input-sm" value="{{$AnuncisCangur->descrpcio}}">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="preu" id="preu" class="form-control input-sm" value="{{$AnuncisCangur->preu}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit"  value="Actualitzar" class="btn btn-success btn-block">
                                    <a href="{{ route('anunciscangurs.index') }}" class="btn btn-info btn-block" >Enrere</a>
                                </div>	
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
