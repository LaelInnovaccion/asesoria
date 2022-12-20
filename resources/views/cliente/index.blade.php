@extends('layouts.app')

@section('title', "Clientes")

@section('nav')
    <a href="{{ route('cliente.create') }}" class="btn btn-link">Crear Nueva Cliente</a>
    <a href="{{ route('cliente.index') }}" class="btn btn-link">Listar Clientes</a>
@endsection

@section('contenido')
    <h3>Listado de Clientes</h3>
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