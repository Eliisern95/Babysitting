@extends ('babysitting.cangurs.templatecangur')
@section ('content')


<div class="">
    {!! Form::open(['route'=>'backendcangur.store']) !!}

<div class="formgroup">
    <label for="titol">Titol:</label>
    {!!
    Form::text(
    'titol',
    null,
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
    <label for="color">Color:</label>
    <input type="color" name="color" class="formcontrol">
</div>

<div class="formgroup">
    {!! Form::submit('Desar', array('class'=>'btn btnprimary'))
    !!}
    <a href="{{ route('backendcangur.index') }}" class="btn btnwarning">
        Cancel∙lar</a>
</div>

{!! Form::close() !!}
</div>
@endsection
