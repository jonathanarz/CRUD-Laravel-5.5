@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-1"></div>
    <div class="col-md-9">
      <div class="card-panel red darken-1">
        <h4 style="color: white;">¿Desea eliminar la siguiente Categoría?</h4><br>
      </div>
      <form action="/categories/{{$category->id}}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label>Nombre de la categoría:</label>
          <p>{{$category->name}}</p>
        </div>
        <div class="form-group">
          <label>Descripción de la categoría:</label>
          <p>{{$category->description}}</p>
        </div>
        <div>
           <button type="submit" class="btn col-md-4">Eliminar</button>
           <div class="col-md-3"></div>
           <a class=" col-md-4 btn" href="{{url('/categories')}}">Cancelar</a>
        </div>
      </form>
    </div>
</div>
@endsection
