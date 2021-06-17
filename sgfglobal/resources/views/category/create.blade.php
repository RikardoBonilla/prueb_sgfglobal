@extends('layouts.baseTemplate');

@section('contents')
    <h1> Crear Nueva Categoria</h1>
    <form action="/categories" method="POST">
        @csrf 
        <div class="mb-3">
            <label for="" class="form.label"> Descripcion</label>
            <input type="text" id="description" name="description" class="form-control" tabindex="1">
        </div>
        <a href="/categories" class="btn btn-danger" tabindex="2"> Cancelar </a>
        <button type="submit" class="btn btn-success"> Guardar </button>
    </form>
@endsection