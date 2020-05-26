@extends('layouts.app')

@section('title', 'Aeroshop | Editar datos de usuario')

@section('body-class', 'profile-page ')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
  </div>
  <div class="main main-raised">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="info">
            <div class="icon icon-info" align="center">
               <i class="material-icons" >contact_mail</i> <br><font SIZE=10 FACE="times new roman" align="center" color="#5A5655">Mis Datos</font><br>
               <font SIZE=4 FACE="times new roman" align="center" color="#5A5655">Editar datos personales.</font>
            </div>
            </div>
            <form method="post" action="{{url('/cuenta/update') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
    
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Nombre</label>
                    <input  class="form-control" type="text" name='nombre' required="" maxlength="40" value="{{ auth()->user()->name }} ">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Apellidos</label>
                    <input  class="form-control" type="text" name='apellidos'required="" maxlength="40" value="{{ auth()->user()->apellidos }} ">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Telefono</label>
                    <input type="number" pattern="[0-9+]{1,15}" name='telelfono' class="form-control"value="{{ auth()->user()->telefono }}">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Correo electronico</label>
                    <input type="email" class="form-control" required="" name='email' maxlength="40"value="{{ auth()->user()->email }}">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Dirrecion de residencia</label>
                    <input  class="form-control" type="text" required="" name='direccion' maxlength="40"value="{{ auth()->user()->direccion}}">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group">
                    <label class="control-label">Ciudad de origen</label></div>
                    <select name="municipio_id" class="form-control">
                    <ul class="dropdown-menu">
                      @foreach ($municipio as $municipio)
                      <option value="{{ $municipio->id }}"  @if($municipio->id == old('municipio_id', auth()->user()->municipio_id)) selected @endif> {{ $municipio->nombre}} 
                      </option>
                      @endforeach 
                    </ul>
                    </select>
                </div>
<!--
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">cloud_upload</i>
                    </span>
                    <div>
                    <label class="control-label">Foto de perfil</label> <br>
                      <input type="file" name="foto" accept=".jpg, .png, .jpeg" required="">
                    </div>
                  </div>
                </div> -->
              </div>

                  <div class="footer text-center">
                    <button class="btn btn-success">Guardar Cambios</button>
                  </div>

            </form>
          </div>

          

          
        </div></div>
      </div>
    </div>

@include('includes.footer')

@endsection
