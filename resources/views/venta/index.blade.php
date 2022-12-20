@extends('layouts.app')

@section('title', "Ventas")

@section('nav')
    <a href="{{ route('venta.create') }}" class="btn btn-link">Crear Nueva Venta</a>
    <a href="{{ route('venta.index') }}" class="btn btn-link">Listar Ventas</a>
@endsection

@section('contenido')
    <h3>Listado de Ventas</h3>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Fecha
                </th>
                <th>
                    Cliente
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