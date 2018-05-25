@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Entrada correcte A USUARI NORMAL</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Perfecte! Estàs logejat corrrectament!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
