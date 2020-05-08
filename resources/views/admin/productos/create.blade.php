@extends('layouts.app')

@section('title', 'Registrar de productos')

@section('body-class', 'profile-page ')

@section('contenido')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Registrar Productos</h2>
        </div>  
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors ->all() as $error)
                <li> {{ $error }} </li>
              @endforeach
            </ul>
          </div>
        @endif
    
        <form method="post" action="{{url('/admin/productos')}}">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
              <label class="control-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="nombre" required="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group ">
              <label class="control-label">Precio</label>
                <input type="number" step="0.01" class="form-control" name="precio" required="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group ">
              <label class="control-label">Descripción Corta</label>
                <input type="text" class="form-control" name="descripcion" required="">
              </div>
            </div>
            <div class="col-md-6 dropdown ">
       
              <div class="form-group">
                <label class="control-label">Seleccione una categoria</label>
                <select name="category_id" class="form-control">
                    <option placeholder="Descripción completa del producto"></option>
                    @foreach ($category as $categorys)
                      <option value="{{ $categorys->id }}"> {{ $categorys->nombre}} 
                      </option>
                     @endforeach 
                  </select>
              </div> 
            </div> 
          </div> 
          <div class="section text-center">
          <textarea class="form-control" placeholder="Descripción completa del producto" rows="5" name="long_descripcion"></textarea>
          <br>
            <button class="btn btn-success">Registrar Productos</button>
            <a href="{{ url ('/admin/productos') }}" class="btn btn-default">Cancelar</a>
        </form>
      </div>
    </div>
  </div>

@include('includes.footer')
@endsection


