@extends('layouts.app')
@section('body-class', 'signup-page')
@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset ('assets/img/home.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
                <div class="card-header card-header-primary text-center">
                    <h4 class="card-title">RESTABLECIMIENTO DE CONTRASEÑA</h4>
                </div>
                    <p class="description text-center"><b>Completa los datos</b></p>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="input-group">
                            <label for="email" class="col-md-12 col-form-label text-md-center">{{ __('E-Mail Address') }}</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">mail</i>
                                </span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña"
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmar Cambios') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>@include('includes.footer')
</div>

@endsection
