@extends('layouts.app')

@section('title', 'Bienvenidos a Aeroshop')

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
          <h1 class="title">Aeroshop</h1>
          <br>
          <a href="https://www.youtube.com/watch?v=ZGrarm9tX1s" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Ver Tutorial
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
            <h2 class="title">Aeroshop <br>Si lo quieres ¡Lo tienes!</h2>
            <h5 class="description">Estamos revolucionando el mundo. Pide todo lo que quieras y necesites
               para ti o tu hogar. encuéntralo en pocos clics y las 24 horas del día, con servicio de 
               entrega nacional. En Aeroshop contamos con mas de 2 mil productos divididos 
               en 5 categorías: hogar, accesorios, deportes, tecnologia y belleza. <br>
            Regístrate y descubre el mundo de la compra online sin moverte de tu casa con Aeroshop.
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
                <p>En Aeroshop, paga desde la comodidad de tu casa con pagos contra entrega y de igual forma desde tu banco de confianza o hazlo con efectivo en puntos de pago Efecty o PayPal . ¡Y siempre es seguro!.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Seguridad, de principio a fin</h4>
                <p>¿No te gusta? ¡Devuélvelo! Aeroshop, no hay nada que no puedas hacer, porque todas tus compras estan siempre protegidas..</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">add_shopping_cart</i>
                </div>
                <h4 class="info-title">Envio Gratis</h4>
                <p>Con solo estar registrado en Aeroshop, tienes envíos gratis en todos nuestros productos con compras efectivas desde $100.000 pesos..</p>
              </div>
            </div>
          </div>                
        </div>
  
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">CATEGORIAS DISPONIBLES</h2>
           <form class="form-inline ml-auto" method="get" action="{{ url('/busquedas')}}">
           <div class="col-md-12 ml-auto mr-auto">
            <input type="text" class="form-control" placeholder="¿Que Producto Buscas?" name="busqueda" id="busqueda">
              <button type="submit" class="btn btn-primary btn-just-icon btn-round">
                <i class="material-icons">search</i>
              </button>
            </div>
          </form> 
          </div>
        </div>
      <br>
        <div class="team">
          <div class="row">
            @foreach($categoria as $category)
            <div class="col-md-4">
              <div class="team-player">
                 <img src="{{ $category->destacada_image_url}}"  alt="Imagen principal de la categoria {{ $category->nombre }}" class="img-raised rounded-circle img-fluid">
                  <h4 class="card-title">  
                    <a href="{{ url('/categorias/'.$category->id) }}" rel="tooltip" title="Ver Productos de la Categoria: {{ $category->nombre }}"> {{$category->nombre}} </a> 
                  </h4>
                    <div class="card-body">
                    <p class="description">{{$category->descripcion}}</p>
                    </div>
                </div>
              </div>  
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

@include('includes.footer')

@endsection

