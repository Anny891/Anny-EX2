<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Equipos</title>
</head>
<body>

    <h2>Inicio de sesión</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <label>Usuario</label>
        <input type="text" name="usuario"
               value="{{ old('usuario') }}" required>

        <br><br>

        <label>Contraseña</label>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit">Iniciar sesión</button>
    </form>

</body>
</html>