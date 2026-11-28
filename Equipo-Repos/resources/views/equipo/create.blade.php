
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Equipo</title>
</head>
<body>

    <h2>Registrar Equipo Informático</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('equipo.store') }}">
        @csrf

        <label>Código</label>
        <input type="text" name="codigo"
               value="{{ old('codigo') }}" maxlength="30" required>

        <br><br>

        <label>Nombre</label>
        <input type="text" name="nombre"
               value="{{ old('nombre') }}" maxlength="100" required>

        <br><br>

        <label>Marca</label>
        <input type="text" name="marca"
               value="{{ old('marca') }}" maxlength="80" required>

        <br><br>

        <label>Fecha de adquisición</label>
        <input type="date" name="fecha_adquisicion"
               value="{{ old('fecha_adquisicion') }}"
               max="{{ date('Y-m-d') }}" required>

        <br><br>

        <label>Estado</label>
        <select name="estado" required>
            <option value="">Seleccione un estado</option>
            <option value="disponible" @selected(old('estado') == 'disponible')>Disponible</option>
            <option value="asignado" @selected(old('estado') == 'asignado')>Asignado</option>
            <option value="mantenimiento" @selected(old('estado') == 'mantenimiento')>Mantenimiento</option>
        </select>

        <br><br>

        <button type="submit">Guardar</button>
        <a href="{{ route('equipo.index') }}">Cancelar</a>
    </form>

</body>
</html>
