@extends('layouts.app')

@section('title', 'Bienvenidos a SofySHOP')

@section('body-class', 'profile-page ')

@section('contenido')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
  </div>
  <div class="main main-raised">
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="info">
            <div class="icon icon-info" align="center">
               <i class="material-icons" >contact_mail</i> <br><font SIZE=10 FACE="times new roman" align="center" color="#5A5655">Mis Datos</font><br>
               <font SIZE=4 FACE="times new roman" align="center" color="#5A5655">Visializa o actualiza tusdatos personales.</font>
            </div>
            </div>
            <form class="contact-form">
              <div class="row">
                @foreach($user as $User)
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre</label>
                    <input  class="form-control" type="text" required="" maxlength="40" value="{{$User->name}}">
                  </div>
                 </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Telefono</label>
                    <input type="number" pattern="[0-9+]{1,15}" class="form-control"value="{{$User->telefono}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Correo electronico</label>
                    <input type="email" class="form-control" required="" maxlength="40"value="{{$User->email}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Dirrecion de residencia</label>
                    <input  class="form-control" type="text" required="" maxlength="40"value="{{$User->direccion}}">
                  </div>
                 </div>
                     @endforeach
              </div>     
            </form>
          </div>
        </div>
      </div>
    </div>

@include('includes.footer')

@endsection
