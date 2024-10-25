<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD de Artículos')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Sistema CRUD de Artículos</h1>
        <nav>
            <a href="{{ route('articulos.index') }}">Inicio</a>
            <a href="{{ route('articulos.create') }}">Crear Artículo</a>
        </nav>
    </header>

    <main>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <p>Aplicación CRUD en Laravel - @php echo date('Y'); @endphp</p>
    </footer>
</body>
</html>
