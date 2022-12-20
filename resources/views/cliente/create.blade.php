@extends('layouts.app')

@section('title', "Clientes")

@section('nav')
    <a href="{{ route('cliente.create') }}" class="btn btn-link">Crear Nueva Cliente</a>
    <a href="{{ route('cliente.index') }}" class="btn btn-link">Listar Clientes</a>
@endsection

@section('contenido')
    <h1>Registrar Cliente</h1>
    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre">Nombre del Cliente</label>
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