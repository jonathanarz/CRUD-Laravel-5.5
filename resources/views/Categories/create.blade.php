@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-3"></div>
    <div class="col-md-6">
      <h1>Registro de Categoría</h1><br>
      <form action="/categories" method="POST">
        <input type="hidden" name="_method" value="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label>Nombre de la categoría:</label>
          <input class="col-xs-12 col-sm-12 col-md-12 col-lg-12 browser-default " type="text" name="nameCategory">
        </div>
        <div class="form-group">
          <label>Descripción de la categoría:</label>
          <textarea name="description" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 browser-default " rows="5" cols="80" required></textarea>
        </div>
        <div>
          <br><br><br>
           <button type="submit" class="btn btn-primary col-xs-12 col-sm-12 col-md-12 col-lg-12">Agregar</button>
        </div>
      </form>
    </div>
</div>
@endsection
