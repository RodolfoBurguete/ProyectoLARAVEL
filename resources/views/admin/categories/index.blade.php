@extends('layouts.admin')
@section('title','Gestion de Categorias')

@section('breadcrumb')

   <li class="breadcrumb-item active">@yield('title')</li>

@endsection


@section('content')
   <div class= "card">
     <div class= "card-header">
     <h6 class="card title">Seccion de categorias </h6>
     <div class="card-tools">
      <a type="button" class="btn btn-tool" href="{{route('categories.create')}}">
            <h6>Agregar <i class="fas fa-plus"></i></h6>

       </div>
     </div>
     <div class="card-body table-responsive p-0" style="heigth: 300px;">
       
        <table class="table table-head-fixed">
        <thead>
           <tr>
                 <th scope="col">ID</th>
                 <th>Nombre</th>
                 <th>Modulo</th>
                 <th colspan="2">&nbsp;</th>
                
           </tr>
          </thead>
          <tbody>
             @foreach ($categories as $category)
             <tr>
             <td scope="row">{{$category->id}}</td>
             <td>{{$category->name}}</td>
             <td> {{$category->module}}</td> 
             <td width="10px">
               <a class="btn btn-info" href="{{route('categories.edit', $category->id)}}">
               
               <i class="fas fa-edit"></i>
               </a>
               </td>
               <td width="10px">
               {!! Form::open(['route'=>['categories.destroy',$category->id], 'method'=>'DELETE'])!!}
               <button class="btn btn-danger">
                     <i class="fas fa-trash-alt"></i>
               </button>
               
               </td>
         </tr>
         @endforeach
         </tbody>
      </table>
      {{$categories->render()}}
      </div>
      <div class = "card-footer">
      Footer
      </div>
      </div>


   
   @endsection