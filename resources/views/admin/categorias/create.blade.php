@extends('layouts.app')

@section('title', 'Registrar de Categorias')

@section('body-class', 'profile-page ')

@section('contenido')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Registrar Categoria</h2>
          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors ->all() as $error)
                <li> {{ $error }} </li>
          @endforeach
            </ul>
          </div>
        @endif
        <form method="post" action="{{url('/admin/categorias')}}" enctype="multipart/form-data">
          @csrf
        <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
              <label class="control-label">Nombre de la categoria</label>
                <input type="text" class="form-control" name="nombre" required="">
              </div>
            </div>  
             <div class="col-md-6">
              <div class="col-md-6">
              <label class="control-label">Imagen de la categoria</label>
                <input type="file" name="imagen" accept=".jpg, .png, .jpeg" required="">
             </div>
             </div>
            </div>
       
        <br>   
          <textarea class="form-control" placeholder="Descripción completa de la categoria" rows="5" name="descripcion"></textarea>

            <button class="btn btn-success">Registrar categorias</button>
            <a href="{{ url ('/admin/categorias') }}" class="btn btn-default">Cancelar</a>
        </form>
      </div>
    </div>
   </div>

@include('includes.footer')
@endsection
