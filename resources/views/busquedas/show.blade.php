@extends('layouts.app')

@section('title', ' Resultados de busqueda')

@section('body-class', 'profile-page ')

@section ('estilos')
    <style>
      img {
        display: inline;
        margin: 0 auto;
        height: 100%;
        width: auto;
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
             <img src="/imagenes/Lupa.png" alt="" class="rounded" class="img-responsive" >
              </div>
              <div class="name">
                    <h2 class="title"></b> Resultados de busqueda </h2>
              </div>
              <div class="text-center" >
              <h3>Se encontraron # {{ $Productos->count() }} resultados para el termino <b>{{ $busqueda }}</b>. </h3>
            </div>
            <br>  <br>
        </div>
     </div>
  

      <div class="team">
          <div class="row">
            @foreach($Productos as $Producto)
            <div class="col-md-4">
              <div class="team-player">
                 <img src="{{ $Producto->destacada_image_url}}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  <h4 class="card-title">  
                    <a href="{{ url('/productos/'.$Producto->id) }}" rel="tooltip" title="Ver Producto">{{$Producto->nombre}}</a>
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
         <nav aria-label="Page navigation ">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a> {{ $Productos->links() }} </a>
              </li>
            </ul>
          </nav>
      </div>
  </div>
</div>




@include('includes.footer')

@endsection
