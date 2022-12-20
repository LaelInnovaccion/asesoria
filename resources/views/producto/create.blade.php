@extends('layouts.app')

@section('title', "Productos")

@section('nav')
    <a href="{{ route('producto.create') }}" class="btn btn-link">Crear Nueva Producto</a>
    <a href="{{ route('producto.index') }}" class="btn btn-link">Listar Productos</a>
@endsection

@section('contenido')
    <h1>Registrar Productos</h1>
    <form action="{{ route('producto.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre">Nombre del Producto</label>
                <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="Nombre del Producto" value="{{ old('nombre') }}">
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