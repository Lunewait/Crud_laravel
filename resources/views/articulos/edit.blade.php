@extends('layouts.principal')

@section('title', 'Editar Artículo')

@section('content')
    <h1>Editar Artículo</h1>

    <form action="{{ route('articulos.update', $articulo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre', $articulo->nombre) }}">
        @error('nombre')<div>{{ $message }}</div>@enderror

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" value="{{ old('cantidad', $articulo->cantidad) }}">
        @error('cantidad')<div>{{ $message }}</div>@enderror

        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="{{ old('precio', $articulo->precio) }}">
        @error('precio')<div>{{ $message }}</div>@enderror

        <button type="submit">Actualizar</button>
    </form>
@endsection

