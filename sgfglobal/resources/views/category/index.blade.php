@extends('layouts.baseTemplate');

@section('contents')
    <a href="categories/create" class="btn btn-primary"> Crear </a>
    <table class="table table-striped">
        <thead>
            <tr class="text-center">
                <th scope="col"> Codigo </th>
                <th scope="col"> Descripcion </th>
                <th scope="col"> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr class="text-center"> 
                    <td> {{ $category->id }} </td>
                    <td> {{ $category->description }} </td>
                    <td>
                        <form action=" {{ route('categories.destroy', $category->id ) }}" method="POST">
                            <a class="btn btn-info" href="/categories/{{$category->id}}/edit"> Editar </a>
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