@extends('layouts.app')

@section('title', 'Imagenes de productos ')

@section('body-class', 'profile-page ')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Imagenes del Producto "{{$producto->nombre}}"</h2>
          
          <form method="post" action="" enctype="multipart/form-data">
            @csrf
              <div class="col-md-6">  
              <input type="file" name="foto" accept=".jpg, .png, .jpeg" required=""></div>
              <button type="" class="btn btn-success btn-simple btn-round">Subir imagenes</button>
              <a href="{{ url('/admin/productos') }}" class="btn btn-default btn-simple btn-round">Volver al listado de productos</a>
          </form>
          <hr>
            <div class="row">
              @foreach($imagen as $imagenes)
                <div class="col-md-4"> 
                  <div class="card" style="width: 20rem;">
                      <img class="card-img-top" src="{{$imagenes->url}}" rel="nofollow" >
                          <div class="card-body">
                            <form method="post" action="">
                                @csrf 
                                @method ('DELETE')
                                <input type="hidden" name="image_id" value="{{ $imagenes->id}}">
                              <button type="" class="btn btn-success btn-danger btn-round">Eliminar imagenes</button>
                              @if ($imagenes->destacada)
                               <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen De Muestra">
                                <i class="material-icons">favorite</i>
                              </button>
                              @else
                              <a href="{{ url('/admin/productos/'.$producto->id.'/imagenes/select/'.$imagenes->id) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">favorite</i>
                              </a>
                              @endif
                            </form>
                          </div>
                    </div>
                </div>
             @endforeach
          </div>
      </div>
    </div>
  </div>

@include('includes.footer')
@endsection
