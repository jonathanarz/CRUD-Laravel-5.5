@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-3"></div>
    <div class="col-md-6">
      <h1>Actualización de Categoría</h1><br>
      <form action="/categories/{{$category->id}}" method="POST">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label>Nombre de la categoría:</label>
          <label>{{$category->name}}</label>
        </div>
        <div class="form-group">
          <label>Descripción de la categoría:</label>
          <textarea name="description" required class="col-xs-12 col-sm-12 col-md-12 col-lg-12" rows="5" cols="80"></textarea>
        </div>
        <div>
          <br><br><br><br><br>
           <button type="submit" class="btn btn-primary col-md-4">Guardar</button>
           <div class="col-md-3"></div>
           <a class=" col-md-4 btn" href="{{url('/categories')}}">Cancelar</a>
        </div>
      </form>
    </div>
</div>
@endsection
