@extends('layouts.app')

@section('title', 'Registrar de productos')

@section('body-class', 'profile-page ')

@section('contenido')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Editar Producto</h2>
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
        <form method="post" action="{{url('/admin/productos/'.$producto->id.'/edit') }}">
          @csrf
        <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
              <label class="control-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group ">
              <label class="control-label">Precio</label>
                <input type="number" step="0.01" class="form-control" name="precio" value="{{$producto->precio}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group ">
              <label class="control-label">Descripción Corta</label>
                <input type="text" class="form-control" name="descripcion" value="{{$producto->descripcion}}">
              </div>
            </div>
            <div class="col-md-6  ">
             <label class="control-label">Seleccione una categoria</label>
              <div class="form-group">
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($category as $categorys)
                      <option value="{{ $categorys->id }}"
                        @if($categorys->id == old('categorys_id', $producto->category_id)) selected @endif> {{ $categorys->nombre}} 
                      </option>
                     @endforeach 
                  </select>
              </div> 
            </div> 
        </div> 
        <div class="section text-center">  
          <textarea class="form-control" placeholder="Descripción completa del producto" rows="5" name="long_descripcion">{{$producto->long_descripcion}}"</textarea>
          <br>
            <button class="btn btn-success">Guardar Productos</button>
            <a href="{{url('/admin/productos/') }}" class="btn btn-default">Cancelar</a>
        </form>
      </div>
    </div>
  </div>

@include('includes.footer')
@endsection
