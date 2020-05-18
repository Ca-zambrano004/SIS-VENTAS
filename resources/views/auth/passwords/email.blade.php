@extends('layouts.app')

@section('content')

<div class="page-header header-filter" style="background-image: url('{{ asset ('assets/img/home.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
    <div class="row" >
        <div class=" col-lg-12 col-md-12 ml-auto "align="center">
          <div div class="card text-center" style="width: 30rem;" style="height: 300rem;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="card-header card-header-primary">
                            <h3 class="card-title">RESTABLECER CONTRASEÑA</h3>
                            <p class="category"> INGRESA TUS DATOS</p>
                        </div>
                        <br>
                        <div class="card-body">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">mail</i>
                                </span>
                              </div>
                       
                           

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingresa tu correo">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-3 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Solicitar Restablecimiento de Contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
