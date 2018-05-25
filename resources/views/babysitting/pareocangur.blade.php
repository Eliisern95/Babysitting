@extends ('babysitting.template')
@section ('content')

<div class="text-center">      
    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Som una Familia</a>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Sóc un/a cangur</a>
    </p>
</div>

<div class="d-flex p-3">
    <div class="col-md-5 col-md-offset-3">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
            <img src="{{asset('imatges/family.png')}}" width="400px" height="500px">
            <a class="btn btn-outline-danger dropdown-toggle-split btn-sm"  href="{{ route('register') }}" aria-haspopup="true" aria-expanded="false">
                <input class="form-check-input" type="" name="parecangur" id="pare" value="pare">
                <label class="form-check-label col-form-label" for="pare">Pare</label>
                EM REGISTRO!</a>
                    </div>
                </div>
            </div>
 </div>

 
<!--Cangurs-->

<div class="d-flex p-3">
    <div class="col-md-5 col-md-offset-3">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
         <img src="{{asset('imatges/kangaroo.png')}}" width="400px" height="500px">
         <a class="btn btn-outline-danger dropdown-toggle-split btn-sm"  href="{{ route('register') }}" aria-haspopup="true" aria-expanded="false">
             <input class="form-check-input" type="" name="parecangur" id="cangur" value="cangur">
             <label class="form-check-label col-form-label" for="cangur"></label>
             EM REGISTRO!</a>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>
@stop