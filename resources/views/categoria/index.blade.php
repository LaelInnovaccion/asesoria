@extends('layouts.app')

@section('title', "Categorias")

@section('nav')
    <a href="{{ route('categoria.create') }}" class="btn btn-link">Crear Nueva Categoria</a>
    <a href="{{ route('categoria.index') }}" class="btn btn-link">Listar Categorias</a>
@endsection

@section('contenido')
    <h3>Listado de Categorias</h3>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>
                        {{ $categoria->nombre }}
                    </td>
                    <td>
                        <div class="container">
                            <div class="btn-group me-2" role="group" aria-label="First group">
                                <a href="" type="button" class="btn btn-success"><i class="bi bi-check-circle-fill"></i></a>
                                <a href="" type="button" class="btn btn-warning"><i class="bi bi-info-circle"></i></a>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection