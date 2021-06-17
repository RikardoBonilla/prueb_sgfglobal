@extends('layouts.baseTemplate');

@section('contents')
    <a href="articles/create" class="btn btn-primary"> Crear </a>
    <table class="table table-striped">
        <thead>
            <tr class="text-center">
                <th scope="col"> id </th>
                <th scope="col"> Codigo </th>
                <th scope="col"> Categoria </th>
                <th scope="col"> Descripcion </th>
                <th scope="col"> Cantidad </th>
                <th scope="col"> Precio </th>
                <th scope="col"> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr class="text-center"> 
                    <td> {{ $article->id }} </td>
                    <td> {{ $article->code }} </td>
                    <td> {{ $article->category_id }} </td>
                    <td> {{ $article->description }} </td>
                    <td> {{ $article->amount }} </td>
                    <td> {{ $article->price }} </td>
                    <td>
                        <form action=" {{ route('articles.destroy', $article->id ) }}" method="POST">
                            <a class="btn btn-info" href="/articles/{{$article->id}}/edit"> Editar </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> Borrar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection