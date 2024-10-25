@extends('layouts.principal')

@section('title', 'Crear Artículo')

@section('content')
    <h1>Crear Nuevo Artículo</h1>

    <form action="{{ route('articulos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        @error('nombre')<div>{{ $message }}</div>@enderror

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" value="{{ old('cantidad') }}">
        @error('cantidad')<div>{{ $message }}</div>@enderror

        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="{{ old('precio') }}">
        @error('precio')<div>{{ $message }}</div>@enderror

        <button type="submit">Guardar</button>
    </form>
@endsection

