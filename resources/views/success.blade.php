@extends('layouts.app')

@section('title', 'Gracias por tu sugerencia')

@section('body-class', 'profile-page ')

@section('contenido')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
    <div class="container" >
      <div class="row">
        <div class="col-md-12 ml-auto mr-auto" align="right" >
          <h1 class="title">Aeroshop</h1>
          <br>
          <a href="https://www.youtube.com/watch?v=ZGrarm9tX1s" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Ver Tutorial
          </a>
        </div>
      </div>
  </div>
</div>

@include('includes.footer')

@endsection

