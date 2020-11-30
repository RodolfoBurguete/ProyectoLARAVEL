@extends('layouts.admin')
@section('title','Crear categoria')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('categories.index')}}">Categorias</a>
</li>
   <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class= "card">
     <div class= "card">
     <div class= "card-header">
     <h6 class="card-title">Registro de categoria </h6>
       </div>
               {!! Form::open(['route'=>'categories.store', 'method'=>'POST', 'files'=> true]) !!}
               <div class="card-body">
               @include('admin.categories.form.form')
                </div>
                <!--/. card-body-->
      <div class = "card-footer">
      <a class="btn btn-danger float-rigth" href="{{route('categories.index')}}">Cancelar</a>
      <input type="submit" value="Guardar" class="btn btn-primary">
      </div>
      {!! Form::close()   !!}
      </div>
   @endsection