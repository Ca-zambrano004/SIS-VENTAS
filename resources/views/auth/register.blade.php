@extends('layouts.app')
@section('body-class', 'signup-page')
@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset ('assets/img/home.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-8 ml-auto mr-auto">
              <div class="card card-login">
                @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors ->all() as $error)
                        <li> {{ $error }} </li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                  <div class="card-header card-header-primary text-center">
                    <h4 class="card-title">REGISTRO DE USUARIO</h4>
                  </div>
                  <p class="description text-center"><b>Completa tus datos personales</b></p>
                  <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6"> 
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">person_pin</i>
                                </span>
                            </div>
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombres Completos...">
                        
                        </div>
                    </div>
                        <div class="col-sm-6"> 
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="material-icons">person_pin</i>
                              </span>
                          </div>
                       <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus placeholder="Apellidos Completos...">
                      </div>
                        </div>
                    </div>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">mail</i>
                        </span>
                      </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico...">
                    </div>

                         
                        

                        <div class="row">
                          <div class="col-sm-6"> 
                            
                            <div class="input-group">
                              <span class="input-group-text">
                                <i class="material-icons">home_work</i>
                              </span>
                              <select name="municipio_id" class="form-control">
                              <ul class="dropdown-menu">
                                <option> Seleccione una Cuidad</option>
                                @foreach ($municipio as $municipio)
                                <option value="{{ $municipio->id }}"> {{ $municipio->nombre}} 
                                </option>
                                @endforeach 
                              </ul>
                              </select>
                            </div>
                          </div>

                          <div class="col-sm-6"> 
                            <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">
                                      <i class="material-icons">add_ic_call</i>
                                  </span>
                              </div>
                              <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" required="" autocomplete="telefono" autofocus placeholder="Telefono...">
                            </div>
                          </div>
                        </div>

                          
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">pin_drop</i>
                                    </span>
                                </div>
                            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" required="" autocomplete="direccion" autofocus placeholder="Direccion...">
                            </div>

                      <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">cloud_upload</i>
                                </span>
                            <div>
                            <label class="control-label">Foto de perfil</label> <br>
                              <input type="file" name="foto" accept=".jpg, .png, .jpeg" required="">
                            </div></div>
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
                        </div>
                  </div>
                  <div class="footer text-center">
                    <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Guardar
                    </button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        @include('includes.footer')
</div>

@endsection
