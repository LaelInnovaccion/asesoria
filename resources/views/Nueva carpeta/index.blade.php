@extends('layouts.app')

@section('title', "Clientes")

@section('nav')
    <a href="" class="btn btn-link">Crear Nueva Cliente</a>
    <a href="" class="btn btn-link">Listar Clientes</a>
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
            <tr>
                <td>
                    Aquí
                </td>
                <td>
                    Aquí
                </td>
            </tr>
        </tbody>
    </table>
@endsection