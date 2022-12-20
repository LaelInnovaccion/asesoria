@extends('layouts.app')

@section('title', "Inicio")

@section('contenido')
    <h1>Menu</h1>

    <a href="{{ route('categoria.index') }}" class="btn btn-link">Listar Categorias</a>
    <a href="{{ route('cliente.index') }}" class="btn btn-link">Listar Clientes</a>
    <a href="{{ route('detalle_venta.index') }}" class="btn btn-link">Listar Detalles de Ventas</a>
    <a href="{{ route('producto.index') }}" class="btn btn-link">Listar Productos</a>
    <a href="{{ route('venta.index') }}" class="btn btn-link">Listar Ventas</a>

@endsection