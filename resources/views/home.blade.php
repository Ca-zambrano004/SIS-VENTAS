@extends('layouts.app')

@section('title', 'SofySHOP | Dashboard')

@section('body-class', 'profile-page ')

@section('contenido')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
</div>
  
<div class="main main-raised">
    <div class="container">
        <div class="section">
            <h2 class="title text-center">Dashboard</h2>  
            @if (session('notificacion'))
            <div class="alert alert-success" role="alert">
                {{ session('notificacion') }}
            </div>
                @endif

            <ul class="nav nav-pills nav-pills-icons" role="tablist">
            
                <li class="nav-item">
                    <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
                        <i class="material-icons">add_shopping_cart</i>
                        Carrito de compras 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#schedule-1" role="tab" data-toggle="tab">
                        <i class="material-icons">schedule</i>
                        Schedule
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                        <i class="material-icons">list</i>
                        Productos
                    </a>
                </li>
            </ul>
        <div class="tab-content tab-space">
                <div class="tab-pane active" id="dashboard-1">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                             <h4 class="card-title" align="center">Tu carrito de compra contiene</h4>
                            <h4 class="category" align="center"> # {{ auth()->user()->cart->detalles->count() }} Productos.</p>
                        </div>
                    </div>
                </div>
                 <br>
                <table class="table" >
                    <thead>
                        <tr align="center">
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th class="text-right">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (auth()->user()->cart->detalles as $detalles)
                        <tr>
                            <td class="text-center">
                            <img src="{{ $detalles->Producto->destacada_image_url}}" height="60">
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/productos/'.$detalles->Producto->id) }}" target="_blank">{{$detalles->producto->nombre }}</a>
                            </td>
                            <td class="text-center">$ {{ $detalles->producto->precio }}</td>
                            <td class="text-center"> {{ $detalles->cantidad }}</td>
                            <td class="text-center">$ {{ $detalles->cantidad * $detalles->producto->precio }}</td>
                            <td class="td-actions text-right">                           
                                <form method="post" action="{{ url('/cart') }}">
                                    @csrf
                                    @method ('DELETE')
                                    <input type="hidden" name="cart_detalle_id" value="{{ $detalles->id}}">
                                  <div class="btn-group">
                                    <a href="{{ url('/productos/'.$detalles->Producto->id)}} " target="_blank" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-info"></i>
                                    </a>
                                    <button type="submit" rel="tooltip" title="Eliminar Producto" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                              </form>
                            </td>
                      @endforeach
                    </tbody>
                </table>
                <div class="text-center">  
                    <form method="post" action="{{ url ('/orden') }}"> 
                        @csrf
                        <button class=" btn btn-info btn-round">
                                <i class="material-icons">done</i> Realizar Pedido
                        </button>
                    </form>
                </div>
        </div>
        <div class="tab-pane" id="schedule-1">
                  Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                  <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
        </div>

        <div class="tab-pane" id="tasks-1">
                <div class="text-center"> 
                    <div class="row">
                      <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Productos Disponibles</h2>
                       <form class="form-inline ml-auto" method="get" action="{{ url('/busquedas')}}">
                       <div class="col-md-12 ml-auto mr-auto">
                        <input type="text" class="form-control" placeholder="¿Que Producto Buscas?" name="busqueda" id="busqueda">
                          <button type="submit" class="btn btn-primary btn-just-icon btn-round">
                            <i class="material-icons">search</i>
                          </button>
                        </div>
                      </form> 
                      </div>
                    </div>
                    <br>
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
    </div>
</div>

@include('includes.footer')
@endsection