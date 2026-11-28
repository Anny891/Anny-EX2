
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Equipos</title>
</head>
<body>

    <h2>Listado de Equipos Informáticos</h2>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>

    <p>
    <a href="{{ route('equipo.create') }}">Registrar equipo</a>
     </p>

     @if (session('success'))
            <p style="color: green">{{ session('success') }}</p>
     @endif

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Fecha de adquisición</th>
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
                    <td>
                        <a href="{{ route('equipo.edit', $equipos->id) }}">Editar</a>
                    </td>
                    
                </tr>
            @empty
                <tr>
                    <td colspan="7">No hay equipos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
