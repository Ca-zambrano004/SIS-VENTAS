@extends('layouts.app')

@section('title', ' Producto Seleccionado')

@section('body-class', 'profile-page ')

@section ('estilos')
    <style>
      img {
        display: inline;
        margin: 0 auto;
        height: 100%;
      } 
      .image-cropper {
        height: 120px;
        overflow: hidden;
        border-radius: 50%;
      }
    </style>
@endsection


@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
</div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
          <div class="row">
            <div class="col-md-12">
              <div class="image-cropper">
                <img src="{{ $Producto->destacada_image_url}}" class="rounded" class="img-responsive" >
              </div>
              <div class="name">
                  <h3 class="title"><b>NOMBRE: </b> {{ $Producto->nombre }}</h3>
                  <h4> <b>CATEGORIA: </b> {{ $Producto->category->nombre }}</h4>
              </div>
              @if (session('notificacion'))
                <div class="alert alert-success" role="alert">
                    {{ session('notificacion') }}
                </div>
                @endif
            <div class="text-center" >
              <p>{{ $Producto->long_descripcion }}</p>
            </div>
          </div>

            <div class="col-md-12"> 
            @if (Auth::check())
              <button class="btn btn-info btn-round" data-toggle="modal" data-target="#ModalAddToCart">
                <i class="material-icons">add</i> Añadir al carrito de compras
              </button>
                <a href="{{ url('/productos')}}" class="btn btn-default btn-simple btn-round">Volver al listado de productos</a>
              
              @endif
            <hr>
            <div class="row">
          @foreach($imagen as $imagenes)
                <div class="col-md-4"> 
                  <div class="card" style="width: 20rem;">
                      <img class="card-img-top" src="{{$imagenes->url}}" rel="nofollow" >
                          <div class="card-body">
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
  <!-- Modal -->
  <div class="modal fade" id="ModalAddToCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="myModalLabel">Añadir la cantidad del producto</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="{{ url('/cart')}}">
          @csrf
          <input type="hidden" name="producto_id" value="{{ $Producto->id }}">
          <div class="modal-body">
          <input type="number" name="cantidad" value="1" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link btn-sm" data-dismiss="modal">Cancelar </button>
          <button type="submit" class="btn btn-info btn-link btn-sm"><i class="material-icons">add_shopping_cart</i> Agregar al carrito</button>
        </div>
        </form>
      </div>
    </div>
  </div>



@include('includes.footer')

@endsection
