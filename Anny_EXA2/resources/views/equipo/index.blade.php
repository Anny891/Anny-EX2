<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de equipo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Datos de equipo</h1>
       
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Cerrar sesion</button>
        </form>

        <a href="{{ route('equipo.create') }}" class="btn btn-success">Crear nuevo equipo </a>
        <table border="3" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Fecha_adquisicion</th>
                    <th>Estado</th>
                    <th>Acciones</th>           
                </tr>
            </thead>
            <tbody>
                @forelse ($equipo as $equipos)
                    <tr>
                        <td>{{ $equipos->id }}</td>
                        <td>{{ $equipos->codigo }}</td>
                        <td>{{ $equipos->nombre }}</td>
                        <td>{{ $equipos->marca }}</td>
                        <td>{{ $equipos->fecha_adquisicion }}</td>
                        <td>{{ $equipos->estado }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No hay equipos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
</div>
</body>
</html>
        