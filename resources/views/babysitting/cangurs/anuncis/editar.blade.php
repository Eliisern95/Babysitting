@extends ('babysitting.cangurs.templatecangur')
@section ('content')

<div class="container text-center">
    <div class="page-header">
        <h1>
            <i class="glyphicon glyphicon-user"></i>
            ANUNCIS <small>Edita el teu anunci</small>
        </h1>
    </div>



    <div class="">
        {!! Form::open(['route'=>['update-anunci',$anunci->id]]) !!}

        <div class="formgroup">
            <label for="titol">Titol:</label>
            {!!
            Form::text(
            'titol',
            $anunci->titol,
            array(
            'class'=>'formcontrol',
            'placeholder' => 'Introdueix el titol del teu anunci...',
            'autofocus' => 'autofocus'
            )
            )
            !!}  
        </div>

        <div class="formgroup">
            <label for="descripcio">Descripció:</label>
            {!!
            Form::textarea(
            'descripcio',
            null,
            array(
            'class'=>'formcontrol'
            )
            )
            !!}
        </div>

        <div class="formgroup">
            <label for="preu">Preu:</label>
            {!!
            Form::number(
            'preu',
            null,
            array(
            'class'=>'formcontrol'
            )
            )
            !!}
        </div>

        <div class="formgroup">
            {!! Form::submit('Desar', array('class'=>'btn btnprimary'))
            !!}
            <a href="{{ route('backendcangur.index') }}" class="btn btnwarning">
                Cancel∙lar</a>
        </div>

        {!! Form::close() !!}
    </div>
</div>
@endsection
