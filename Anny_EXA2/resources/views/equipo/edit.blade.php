<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Equipo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crear Equipo</h1>
        <form method="POST" action="{{ route('equipo.update', $equipo->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{ old('codigo', $equipo->codigo) }}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $equipo->nombre   ) }}" required>
            </div>
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca', $equipo->marca) }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_adquisicion">Fecha de Adquisición</label>
                <input type="date" class="form-control" id="fecha_adquisicion" name="fecha_adquisicion" value="{{ old('fecha_adquisicion', $equipo->fecha_adquisicion   ) }}" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select class="form-control" id="estado" name="estado" value="{{ old('estado', $equipo->estado  ) }}" required>
                    <option value="">Seleccionar estado</option>
                    <option value="disponible" {{ old('estado', $equipo->estado) == 'disponible' ? 'selected' : '' }}>Disponible</option>
                    <option value="asignado" {{ old('estado', $equipo->estado) == 'asignado' ? 'selected' : '' }}>Asignado</option>
                    <option value="mantenimiento" {{ old('estado', $equipo->estado) == 'mantenimiento' ? 'selected' : '' }}>Mantenimiento</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
            <a href="{{ route('equipo.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>