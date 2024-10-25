@extends('layouts.principal')

@section('title', 'Detalle del Artículo')

@section('content')
    <h1>Detalle del Artículo</h1>
    <p><strong>Nombre:</strong> {{ $articulo->nombre }}</p>
    <p><strong>Cantidad:</strong> {{ $articulo->cantidad }}</p>
    <p><strong>Precio:</strong> {{ $articulo->precio }}</p>

    <a href="{{ route('articulos.index') }}">Volver a la lista de artículos</a>
@endsection

