@extends('layouts.app')

@section('title', "Categorias")

@section('nav')
    <a href="{{ route('categoria.create') }}" class="btn btn-link">Crear Nueva Categoria</a>
    <a href="{{ route('categoria.index') }}" class="btn btn-link">Listar Categorias</a>
@endsection

@section('contenido')
    <h1>Registrar Categoria</h1>
    <form action="{{ route('categoria.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre">Nombre de la Categoria</label>
                <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="Nombre de la categoria" value="{{ old('nombre') }}">
            </div>

            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div> 
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection