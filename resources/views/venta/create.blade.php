@extends('layouts.app')

@section('title', "Ventas")

@section('nav')
    <a href="{{ route('venta.create') }}" class="btn btn-link">Crear Nueva Venta</a>
    <a href="{{ route('venta.index') }}" class="btn btn-link">Listar Ventas</a>
@endsection

@section('contenido')
    <h1>Registrar Ventas</h1>
    <form action="{{ route('venta.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <label for="inputFechaLimite" class="form-label">Fecha Límite</label>
                <input type="datetime-local" name="fecha" id="inputFechaLimite" class="form-control" value="{{ old('fecha')}}">
            </div>

            <div class="col-sm-6">
                <label for="inputCliente" class="form-label">Cliente</label>
                <select name="cliente_id" id="" class="form-control">
                    <option value="">-- Seleccione --</option>
                    @foreach ($clientes as $cliente)
                        <option value=" {{$cliente->id}} "> {{$cliente->nombre}} </option>
                    @endforeach
                </select>
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