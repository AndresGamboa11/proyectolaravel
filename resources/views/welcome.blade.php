<?php
    
    ?>
    
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi proyecto</title>
        <link rel="stylesheet" href="{{ asset('../resources/css/estilosWelcome.css') }}">
    </head>
    <body>
    
        <header>
            <h1 class="titulo">Proyecto</a></h1>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Registro</a> <!-- Asegúrate de que esta línea esté correcta -->
        </header>
    
        <div class="caja">
            <h1 class="Bv">¡Bienvenidos! </h1> <!-- Mensaje de bienvenida -->
        </div>
            
    </body>
    </html>
    