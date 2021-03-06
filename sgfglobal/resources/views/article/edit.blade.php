@extends('dashboard')

@section('contents')
    <h1> Crear Editar Articulo</h1>
    <form action="/articles/{{$article->id}}" method="POST">
        @csrf 
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form.label"> Codigo</label>
            <input type="text" id="code" name="code" class="form-control" tabindex="1" value="{{ $article->code }}">
        </div>
        <div class="mb-3">
            <label for="" class="form.label"> Categoria</label>
            <select name="category_id" id="category_id" class="form-select" aria-label="Default select example" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->description }}</option>
                @endforeach
            </select>
            {{-- <input type="number" id="category_id" name="category_id" class="form-control" tabindex="2" value="{{ $article->category_id }}"> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form.label"> Descripcion</label>
            <input type="text" id="description" name="description" class="form-control" tabindex="3" value="{{ $article->description }}">
        </div>
        <div class="mb-3">
            <label for="" class="form.label"> Cantidad</label>
            <input type="number" id="amount" name="amount" class="form-control" tabindex="4" value="{{ $article->amount }}">
        </div>
        <div class="mb-3">
            <label for="" class="form.label"> Precio </label>
            <input type="text" id="price" name="price" class="form-control" tabindex="5" value="{{ $article->price }}">
        </div>
        <a href="/articles" class="btn btn-danger" tabindex="2"> Cancelar </a>
        <button type="submit" class="btn btn-success"> Guardar </button>
    </form>
@endsection