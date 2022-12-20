@extends('layouts.app')

@section('title', "Detalles de Ventas")

@section('nav')
    <a href="" class="btn btn-link">Crear Nueva Detalle de Venta</a>
    <a href="" class="btn btn-link">Listar Detalles de Ventas</a>
@endsection

@section('contenido')
    <h3>Listado de Detalles de Ventas</h3>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Venta
                </th>
                <th>
                    Producto
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