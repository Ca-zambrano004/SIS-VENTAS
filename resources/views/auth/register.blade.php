@extends('layouts.app')
@section('body-class', 'signup-page')
@section('contenido')
<div class="page-header header-filter" style="background-image: url('{{ asset ('assets/img/home.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
              <div class="card card-login">
                 <form method="POST" action="{{ route('register') }}">
                        @csrf
                  <div class="card-header card-header-primary text-center">
                    <h4 class="card-title">REGISTRO DE USUARIO</h4>
                  </div>
                  <p class="description text-center"><b>Completa sus datos personales</b></p>
                  <div class="card-body">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">face</i>
                                </span>
                            </div>
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre...">
                        </div>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">mail</i>
                            </span>
                          </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico...">
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
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña...">
                        </div>
                         <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">lock_outline</i>
                            </span>
                          </div>
                          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" placeholder="Confirmar Contraseña...">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       
                  </div>
                  <div class="footer text-center">
                    <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Guardar
                    </button>
                  </div>
                 <!--
                     @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                -->

                </form>
              </div>
            </div>
          </div>
        </div>
        @include('includes.footer')
</div>

@endsection
