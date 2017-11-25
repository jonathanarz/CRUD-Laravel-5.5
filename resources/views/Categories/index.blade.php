@extends('layouts.app')
@section('content')
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre de la categoría</th>
        <th>Descripción de la categoría</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->description}}</td>
        <td><a class="col 8 btn btn-success" href="{{url('/categories/'.$category->id.'/edit')}}">Editar</a></td>
        <td><a class="col 8 btn btn-danger" href="{{url('/categories/'.$category->id)}}">Eliminar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
