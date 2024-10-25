@extends('layouts.principal')

@section('title', 'Lista de Artículos')

@section('content')
    <h1>Lista de Artículos</h1>
    <a href="{{ route('articulos.create') }}">Crear Nuevo Artículo</a>

    @if ($articulos->isEmpty())
        <p>No hay artículos disponibles.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                    <tr>
                        <td>{{ $articulo->nombre }}</td>
                        <td>{{ $articulo->cantidad }}</td>
                        <td>{{ $articulo->precio }}</td>
                        <td>
                            <a href="{{ route('articulos.edit', $articulo->id) }}">Editar</a>
                            <a href="{{ route('articulos.show', $articulo->id) }}">Ver</a>
                            <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
