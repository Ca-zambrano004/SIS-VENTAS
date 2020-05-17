@extends('layouts.app')

@section('title', 'Bienvenidos a Aeroshop')

@section('body-class', 'profile-page ')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
  </div>
  <div class="main main-raised">
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="info">
            <div class="icon icon-info" align="center">
               <i class="material-icons" >contact_mail</i> <br><font SIZE=10 FACE="times new roman" align="center" color="#5A5655">Contactanos</font><br>
               <font SIZE=4 FACE="times new roman" align="center" color="#5A5655">Tu opinión es muy importante, por eso trabajamos para mejorar cada día.</font>
            </div>
            </div>
            <h4 class="text-center description">Para Aeroshop es muy importante conocer la percepción de servicio que tienen nuestros clientes sobre los diferentes productos que ofrecemos..
            </h4>
            @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors ->all() as $error)
                  <li> {{ $error }} </li>
            @endforeach
              </ul>
            </div>
          @endif
          <form method="post" action="{{url ('/send')}}">
            @csrf
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre</label>
                    <input  class="form-control" name="nombre" type="text" required="" maxlength="40">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Telefono</label>
                    <input type="number" name="telefono" pattern="[0-9+]{1,15}" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Correo electronico</label>
                    <input type="email" name="email" class="form-control" required="" maxlength="40">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Asunto</label>
                    <input  class="form-control" name="asunto" type="text" required="" maxlength="40">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Mensaje...</label>
                <textarea type="text" name="mensaje"  class="form-control" rows="4" id="exampleMessage" required="">Cordial saludo! </textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <form action=""></form>
                  <button type="submit" name="send" class=" btn btn-primary btn-raised">
                    ENVIAR MENSAJE
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
