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
        <form method="post" action="{{url('/admin/productos')}}">
          @csrf
        <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
              <label class="control-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="nombre" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group ">
              <label class="control-label">Precio</label>
                <input type="number" class="form-control" name="precio" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group ">
              <label class="control-label">Descripción Corta</label>
                <input type="text" class="form-control" name="descripcion" required="">
              </div>
            </div>
            <div class="col-md-3 dropdown ">
             <class class="col-md-6"></class>
              <div class="form-group">
                <select name="categoria" id="category_id" class="form-control">
                  <option>Seleccione una categoria </option>
                    @foreach ($category as $categorys)
                      <option value="{{ $categorys['id'] }} " class="btn btn-simple dropdown-toggle" data-toggle="dropdown" class="dropdown-menu"> {{$categorys['nombre']}}
                      </option>
                    @endforeach 
                </select>
              </div> 
            </div> 
        </div> 
            <br>   
          <textarea class="form-control" placeholder="Descripción completa del producto" rows="5" name="long_descripcion"></textarea>
            <button class="btn btn-success">Registrar Productos</button>
        </form>
      </div>
    </div>
  </div>

@include('includes.footer')
@endsection
