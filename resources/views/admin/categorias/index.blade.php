@extends('layouts.app')

@section('title', 'Listado de categorias')

@section('body-class', 'profile-page ')

@section('contenido')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home1.png') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div align='center'>
      <div class="section text-center">
        <h2 class="title">Categorias</h2>

          <a href="{{url('/admin/categorias/create')}}" class="btn btn-primary btn-round"><i class="material-icons">add_circle</i> Agregar Categoria
          </a>
          <br><br>
            <table class="table" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th >Nombre</th>
                        <th >Descripción</th>
                        <th >Imagen</th>
                        <th >Opciones</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($categoria as $num => $categorias)
                    <tr>
                        <td>{{ $num+1 }}</td>
                        <td>{{$categorias->nombre }}</td>
                        <td>{{$categorias->descripcion }}</td>
                        <td>
                          <img src="{{ $categorias->destacada_image_url }}" height="80">
                        </td>
                        <td class="td-actions text-right">
                            <form method="post" action="{{ url('/admin/categorias/'.$categorias->id.'/delete') }}">
                                @csrf
                              <div class="btn-group">
                                  <a href="{{ url('/categorias/'.$categorias->id)}}" rel="tooltip" title="Ver Categorias" class="btn btn-info btn-simple btn-xs" target="_blank">
                                    <i class="fa fa-info"></i>
                                  </a>
                                  <a href="{{ url('/admin/categorias/'.$categorias->id.'/edit') }}" rel="tooltip" title="Editar Categoria" class="btn btn-success btn-simple btn-xs">
                                   <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" rel="tooltip" title="Eliminar Categoria" class="btn btn-danger btn-simple btn-xs">
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
                <a> {{ $categoria->links() }} </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

@include('includes.footer')
@endsection
