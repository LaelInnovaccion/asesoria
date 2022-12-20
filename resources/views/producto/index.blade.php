@extends('layouts.app')

@section('title', "Productos")

@section('nav')
    <a href="{{ route('producto.create') }}" class="btn btn-link">Crear Nueva Producto</a>
    <a href="{{ route('producto.index') }}" class="btn btn-link">Listar Productos</a>
@endsection

@section('contenido')
    <h3>Listado de Productos</h3>
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
        </tbody>
    </table>
@endsection