@extends('layouts.app')

@section('title', 'Gracias por tu sugerencia')

@section('body-class', 'profile-page')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
</div>


<div class="main main-raised">
    <div class="section section-contacts">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="info">
          <div class="icon icon-success" align="center">
             <i class="material-icons" >email</i> <br><font SIZE=10 FACE="times new roman" align="center" color="#5A5655">Mensaje Enviado</font><br>
          </div>
          </div>
          <div class="col-md- ml-auto mr-auto" align="center">
            <h1 class="title">GRACIAS POR TU OPINIÓN</h1>
              <h2> <b> !Pronto nos pondremos en contacto con usted. </b></h2>   
          </div>
        </div>
      </div>
    </div>
</div>

@include('includes.footer')

@endsection

