@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registre') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="radios text-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="sex1" value="Home">
                                <label class="form-check-label col-form-label" for="sexe">Home</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="sex2" value="Dona">
                                <label class="form-check-label col-form-label" for="sexe">Dona</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="sex3" value="Altres">
                                <label class="form-check-label col-form-label" for="sexe">Altres</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control is-valid{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                <div class="control">
                                    Es resquereix nom
                                </div>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Cognom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control is-valid{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>
                                <div class="control">
                                    Es resquereix cognom
                                </div>
                                @if ($errors->has('surname'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('surname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="direction" class="col-md-4 col-form-label text-md-right">{{ __('Direcció') }}</label>

                            <div class="col-md-6">
                                <input id="direction" type="text" class="form-control is-valid{{ $errors->has('direction') ? ' is-invalid' : '' }}" name="direction" placeholder="direcció completa" value="{{ old('direction') }}" required>
                                <div class="control">
                                    Es resquereix direcció
                                </div>
                                @if ($errors->has('direction'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('direction') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postalCode" class="col-md-4 col-form-label text-md-right">{{ __('Codi Postal') }}</label>

                            <div class="col-md-6">
                                <input id="postalcode" type="number" class="form-control is-invalid{{ $errors->has('postalCode') ? ' is-invalid' : '' }}" name="codipostal" placeholder="" value="{{ old('postalCode') }}" required>
                                <div class="control">
                                    El camp codiPostal no poden ser lletres!
                                </div>
                                @if ($errors->has('direction'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('postalCode') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="poblacio" class="col-md-4 col-form-label text-md-right">{{ __('Població') }}</label>

                            <div class="col-md-6">
                                <input id="poblacio" type="text" class="form-control is-valid{{ $errors->has('poblacio') ? ' is-invalid' : '' }}" name="poblacio" placeholder="població completa" value="{{ old('poblacio') }}" required>
                                <div class="control">
                                    Es requereix població completa
                                </div>
                                @if ($errors->has('direction'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('poblacio') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefon') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control is-valid{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" placeholder="" value="{{ old('phone') }}" required>
                                <div class="control">
                                    El telèfon no poden ser lletres!
                                </div>
                                @if ($errors->has('direction'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('@ Correu Electronic') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control is-invalid{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <div class="control">
                                    Es requereix una @
                                </div>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contrasenya') }}</label>

                            <div class="col-md-6">
                                <!--Mirar si l'Span el pot posar al final del quadre de text-->
                                <span class="fa fa-eye pull-right"></span>
                                <input id="password" type="password" class="form-control is-invalid{{ $errors->has('password') ? ' is-invalid' : '' }} fa fa-eye pull-right" name="password" required>
                                <div class="control">
                                    La contrasenya ha de contenir a-A una _ i numero del 1-100!
                                </div>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma Contrasenya') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control is-invalid" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registre') }}
                                </button>
                                <div class="control">
                                    Has de triar una de les 2 opcións!
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="radio" aria-label="" name="parecangur" id="pare" value="pare">
                                            <label class="form-check-label col-form-label" for="pare">Ets pare? Aquí!</label>
                                        </div>
                                    </div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="radio" aria-label="" name="parecangur" id="cangur" value="cangur">
                                            <label class="form-check-label col-form-label is-invalid" for="cangur">Ets cangur? Aquí!</label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection


