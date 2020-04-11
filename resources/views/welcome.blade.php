@extends('layouts.app')

@section('title', 'Bienvenidos a SofySHOP')

@section('body-class', 'landing-page')
@section ('estilos')
    <style>
      .team .row .col-md-4{
        margin-bottom: 5em;
      }
    </style>
@endsection

@section('contenido')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
    <div class="container" >
      <div class="row">
        <div class="col-md-12 ml-auto mr-auto" align="right" >
          <h1 class="title" >SofySHOP</h1>
         
          <br>
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i>Ver Tutorial
          </a>
        </div>
      </div>
  </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">SofySHOP <br>Si lo quieres ¡Lo tienes!</h2>
            <h5 class="description">Estamos revolucionando el mundo. Pide todo lo que quieras y necesites para ti o tu hogar. encuéntralo en pocos clics y las 24 horas del día, con servicio de entrega nacional. En SofySHOP contamos con mas de 2 mil productos divididos en 5 categorías: hogar, accesorios, deportes, tecnologia y belleza. <br>

            Regístrate y descubre el mundo de la compra online sin moverte de tu casa con SofySHOP.
          </h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">https</i>
                </div>
                <h4 class="info-title">Paga con tarjeta o en efectivo</h4>
                <p>En SofySHOP, paga desde la comodidad de tu casa con pagos contra entrega y de igual forma desde tu banco de confianza o hazlo con efectivo en puntos de pago Efecty o PayPal . ¡Y siempre es seguro!.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Seguridad, de principio a fin</h4>
                <p>¿No te gusta? ¡Devuélvelo! SofySHOP, no hay nada que no puedas hacer, porque todas tus compras estan siempre protegidas..</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">add_shopping_cart</i>
                </div>
                <h4 class="info-title">Envio Gratis</h4>
                <p>Con solo estar registrado en SofySHOP, tienes envíos gratis en todos nuestros productos con compras efectivas desde $100.000 pesos..</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center">
        <h2 class="title">Productos Disponibles</h2>
        <div class="team">
          <div class="row">
            @foreach($Productos as $Producto)
            <div class="col-md-4">
              <div class="team-player">
                 <img src="{{ $Producto->destacada_image_url}}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                     <h4 class="card-title">
                      <a href="{{ url('/Producto/'.$Producto->id) }}">{{$Producto->nombre}} </a>
                      <br>
                      <small class="card-description text-muted">{{$Producto->category->nombre}}</small>
                    </h4>
                    <div class="card-body">
                    <p class="card-description">{{$Producto->descripcion}}</p>
                    </div>
                </div>
              </div>  
            @endforeach
            </div>
          </div>
          <div class="row">
             {{ $Productos->links() }}
          </div>
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="info">
            <div class="icon icon-info" align="center">
               <i class="material-icons" >contact_mail</i> <br><font SIZE=10 FACE="times new roman" align="center" color="#5A5655">Contactanos</font><br>
               <font SIZE=4 FACE="times new roman" align="center" color="#5A5655">Tu opinión es muy importante, por eso trabajamos para mejorar cada día.</font>
            </div>
            </div>
            <h4 class="text-center description">Para SofySHOP es muy importante conocer la percepción de servicio que tienen nuestros clientes sobre los diferentes productos que ofrecemos..
            </h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre</label>
                    <input  class="form-control" type="text" required="" maxlength="40">
                  </div>
                 </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Telefono</label>
                    <input type="number" pattern="[0-9+]{1,15}" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Correo electronico</label>
                    <input type="email" class="form-control" required="" maxlength="40">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Asunto</label>
                    <input  class="form-control" type="text" required="" maxlength="40">
                  </div>
                 </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Mensaje...</label>
                <textarea type="text" class="form-control" rows="4" id="exampleMessage" required="">Cordial saludo! </textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    ENVIAR MENSAJE
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



@include('includes.footer')

@endsection
