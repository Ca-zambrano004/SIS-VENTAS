<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset ('assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title', 'SofySHOP')
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons   -->  

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->

  <link href=" {{ asset ('assets/css/material-kit.css') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href=" {{ asset ('assets/demo/demo.css') }}" rel="stylesheet" />
  @yield ('estilos')
</head>

<body class="@yield('body-class')">
 <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/')}}">
          <font SIZE=9 FACE="times new roman">SofySHOP</font>
       </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
     
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('INGRESAR') }}</a>
            </li>
            
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRO') }}</a>
            </li>
          @endif

          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
             Menú de Usuario<span class="caret"></span>
            </a>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  
                  <li>
                      <a class="dropdown-item" href="{{ url('/home') }}">
                         Home
                      </a>
                  </li>

                  <li>
                      <a class="dropdown-item" href="{{ url('/productos') }}">
                         Ver Productos
                      </a>
                  </li>

                  @if(auth()->user()->rol)

                  <li>
                      <a class="dropdown-item" href="{{ url('/admin/productos') }}">
                         Gestionar Productos
                      </a>
                  </li>
                  <li>
                      <a class="dropdown-item" href="{{ url('/admin/categorias') }}">
                         Gestionar Categorias
                      </a>
                  </li>
                 
                  @endif
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                      </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                  </li>
                  
              </ul>
            </li>
            <li class="nav-item">
                 <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="{{url('/cuenta') }}"data-original-title="{{ Auth::user()->name }}"> 
                  <img src="{{ asset ('assets/img/avatar.png') }}" alt="Imagen principal de la categoria" class="rounded" class="img-responsive" width="50">    
                 </a>
            </li>
          @endguest
          <li class="nav-item">
             <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="{{url('/contacto') }}"data-original-title="contacto">{{ __('Contacto') }}</a>
          </li> 
        </ul>
      </div>
    </div>
  </nav>
    <div class="wrapper">
   
    @yield ('contenido')
    
    </div>

 </body>
  <!--   Core JS Files   -->
  <script src="{{ asset ('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset ('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset ('assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset ('assets/js/plugins/moment.min.js') }}"></script>

  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset ('assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
  
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset ('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset ('assets/js/material-kit.js') }}" type="text/javascript"></script>
  
 

</html>