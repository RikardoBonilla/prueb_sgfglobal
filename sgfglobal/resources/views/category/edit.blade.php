@extends('dashboard')

@section('contents')
    <h1> Crear Editar Categoria</h1>
    <form action="/categories/{{$category->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form.label"> Descripcion</label>
            <input type="text" id="description" name="description" class="form-control" tabindex="1" value="{{ $category->description }}">
        </div>
        <a href="/categories" class="btn btn-danger" tabindex="2"> Cancelar </a>
        <button type="submit" class="btn btn-success"> Guardar </button>
    </form>
@endsection