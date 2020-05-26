@extends('layouts.app')

@section('title', 'Bienvenidos a Aeroshop')

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
            </div>
            </div>
            <form>
              <div class="row">
    
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Nombre</label>
                    <input  class="form-control" type="text" required="" maxlength="40" value="{{ auth()->user()->name }} ">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Apellidos</label>
                    <input  class="form-control" type="text" required="" maxlength="40" value="{{ auth()->user()->apellidos }} ">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Telefono</label>
                    <input type="number" pattern="[0-9+]{1,15}" class="form-control"value="{{ auth()->user()->telefono }}">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Correo electronico</label>
                    <input type="email" class="form-control" required="" maxlength="40"value="{{ auth()->user()->email }}">
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Dirrecion de residencia</label>
                    <input  class="form-control" type="text" required="" maxlength="40"value="{{ auth()->user()->direccion}}">
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
              </div>
            
            </form>
          </div>
        </div>
    </div>

@include('includes.footer')

@endsection
