<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/estilosLogin.css')); ?>">
    
</head>
<body>

    <header>
        <h1 class="titulo">Proyecto</a></h1>
        <a href="<?php echo e(route('welcome')); ?>">Inicio</a>
        <a href="<?php echo e(route('register')); ?>">Registrar</a>
    </header>
   
    <div class="caja">
    <div class="imgcaja">
        <img src="/img/1.gif" alt="img">
    </div>
        <form method="post">
            <?php echo csrf_field(); ?>
            <h2>Inicio de Sesión</h2>
    
            <?php if(session('error')): ?>
                <p class="error"><?php echo e(session('error')); ?></p>
            <?php endif; ?>>
            <?php if(session('error')): ?>
                <p class="error"><?php echo e(session('error')); ?></p>
            <?php endif; ?>
    
            <label for="email">*Email:</label>
            <input type="email" name="email" id="email" >
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
            <label for="password">*Contraseña:</label>
            <input type="password" name="password" id="password" >
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_curso\proyecto2\resources\views/auth/passwords/login.blade.php ENDPATH**/ ?>