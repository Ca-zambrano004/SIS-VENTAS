@extends('layouts.app')

@section('title', 'Listado de productos')

@section('body-class', 'profile-page ')

@section('contenido')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home1.png') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div align='center'>
      <div class="section text-center">
        <h2 class="title">Productos Disponibles</h2>

          <a href="{{url('/admin/productos/create')}}" class="btn btn-primary btn-round"><i class="material-icons">add_circle</i> Agregar Producto
          </a>
          <br><br>
            <table class="table" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th >Nombre</th>
                        <th >Descripción</th>
                        <th >Categoria </th>
                        <th >Precio</th>
                        <th >Opciones</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($producto as $num => $productos)
                    <tr>
                        <td>{{ $num+1 }}</td>
                        <td>{{ $productos->nombre }}</td>
                        <td>{{ $productos->descripcion }}</td>
                        <td>{{ $productos->category ? $productos->category->nombre: 'General' }}</td>
                        <td>${{ $productos->precio }}</td>
                        <td class="td-actions text-right">
                        
                            
                            <form method="post" action="{{ url('/admin/productos/'.$productos->id.'/delete') }}">
                                @csrf
                              <div class="btn-group">
                                <a href="{{ url('/productos/'.$productos->id)}}" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs" target="_blank">
                                  <i class="fa fa-info"></i>
                                </a>
                                <a href="{{ url('/admin/productos/'.$productos->id.'/imagenes') }}"type="button" rel="tooltip" title="Ver Imagenes del Producto" class="btn btn-warning btn-simple btn-xs">
                                  <i class="fa fa-image"></i>
                                </a>
                                  <a href="{{ url('/admin/productos/'.$productos->id.'/edit') }}" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
                                   <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" rel="tooltip" title="Eliminar Producto" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                  </button> 
                            </div>
                          </form>
                            </div>
                        </td>
                    </tr> 
                  @endforeach 
                </tbody>
            </table>
          <nav aria-label="Page navigation ">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a> {{ $producto->links() }} </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

@include('includes.footer')
@endsection
