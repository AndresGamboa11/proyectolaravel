
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="{{ asset('../resources/css/estilosRegistro.css') }}">
</head>
<body>
    <header>
        <h1 class="titulo">Proyecto</a></h1>
        <a href="{{ route('welcome') }}">inicio</a>
        <a href="{{ route('login') }}">login</a>
    </header>

    <div class="caja">
         
        
        <form action="{{ route('register.post') }}" method="POST"> <!-- Asegúrate de incluir enctype -->
            @csrf <!-- Esto genera el token CSRF necesario -->
            <h2>Registro de Usuario</h2>
            @if(session('success'))
            <p class="exito">{{ session('success') }}</p>
            @endif
            @if(session('error'))
                <p class="error">{{ session('error') }}</p>
            @endif

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
        
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
        
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror

            <button type="submit">Registrar</button>
            </form>
        </div>
</body>
</html>