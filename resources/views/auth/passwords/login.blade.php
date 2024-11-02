<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="{{ asset('../resources/css/estilosLogin.css') }}">
    
</head>
<body>

    <header>
        <h1 class="titulo">Proyecto</a></h1>
        <a href="{{ route('welcome') }}">Inicio</a>
        <a href="{{ route('register') }}">Registrar</a>
    </header>
   
    <div class="caja">
    <div class="imgcaja">
        <img src="/img/1.gif" alt="img">
    </div>
        <form method="post">
            @csrf
            <h2>Inicio de Sesión</h2>
    
            @if(session('error'))
                <p class="error">{{ session('error') }}</p>
            @endif>
            @if(session('error'))
                <p class="error">{{ session('error') }}</p>
            @endif
    
            <label for="email">*Email:</label>
            <input type="email" name="email" id="email" >
            @error('email') 
                <p class="error">{{ $message }}</p>
            @enderror
    
            <label for="password">*Contraseña:</label>
            <input type="password" name="password" id="password" >
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
    
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>