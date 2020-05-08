@extends('layouts.app')

@section('body-class', 'signup-page')

@section('contenido')

<div class="page-header header-filter" style="background-image: url('{{ asset ('assets/img/home.jpg') }}'); background-size: cover; background-position: top center;">
  <div class="container">
    <div class="row" >
      <div class=" col-lg-4 col-md-6 ml-auto mr-auto"align="center">
        <div div class="card text-center" style="width: 20rem;" style="height: 200rem;">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-header card-header-primary">
                    <h3 class="card-title">INICION DE SESSIÓN</h3>
                    <p class="category"> INGRESA TUS DATOS</p>
                      <div class="social-line">
                        <a href="" class="btn btn-just-icon btn-link">
                          <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="" class="btn btn-just-icon btn-link">
                          <i class="fa fa-twitter"></i>
                        </a>
                        <a href="" class="btn btn-just-icon btn-link">
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </div>
                </div>
                <br>
                    <div class="card-body">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">mail</i>
                            </span>
                          </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email...">
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">lock_outline</i>
                            </span>
                          </div>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password...">
                        </div>
                        <br>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                Recordar sessión
                            </label>
                        </div>
                        <div class="footer text-center">
                          <button type="submit" class="btn btn-primary ">Ingresar
                          </button>
                        </div>
                      
                    </div>
              </form>
        </div>
    </div>
  </div>
</div>
          
@include('includes.footer')
@endsection
