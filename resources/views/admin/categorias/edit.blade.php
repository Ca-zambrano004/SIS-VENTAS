@extends('layouts.app')

@section('title', 'Editar Categorias')

@section('body-class', 'profile-page ')

@section('contenido')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Editar Categorias</h2>
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach($errors ->all() as $error)
                <li> {{ $error }} </li>
          @endforeach
            </ul>
          </div>
        @endif
        <form method="post" action="{{url('/admin/categorias/'.$categoria->id.'/edit') }}" enctype="multipart/form-data">
          @csrf
        <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
              <label class="control-label">Nombre de la categoria</label>
                <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $categoria->nombre) }}">
              </div>
              </div>
              <div class="col-md-6">
              <label class="control-label">Imagen de la categoria</label><br>
                <input type="file" name="imagen" accept=".jpg, .png, .jpeg">
                @if ($categoria->imagen)
                <p class="help-block">
                  Subir si solo desea remplazar <a href="{{ asset('/imagenes/categorias/'.$categoria->nombre)}}" target="_blank">la imagen existente</a>.
                </p>
                @endif
                </div>
              </div>   
              <div class="form-group label-floating">
              <label class="control-label" >Imagen de la categoria</label>
            <textarea class="form-control" placeholder="Descripción completa de la categoria" rows="4" name="descripcion">{{ old('descripcion', $categoria->descripcion) }}"</textarea><br>
            <button class="btn btn-success">Guardar Categoria</button>
            <a href="{{url('/admin/categorias/') }}" class="btn btn-default">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
    </div>

@include('includes.footer')
@endsection
