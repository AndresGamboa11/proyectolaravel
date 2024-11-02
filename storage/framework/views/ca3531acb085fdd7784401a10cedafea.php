
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/estilosRegistro.css')); ?>">
</head>
<body>
    <header>
        <h1 class="titulo">Proyecto</a></h1>
        <a href="<?php echo e(route('welcome')); ?>">inicio</a>
        <a href="<?php echo e(route('login')); ?>">login</a>
    </header>

    <div class="caja">
         
        
        <form action="<?php echo e(route('register.post')); ?>" method="POST"> <!-- Asegúrate de incluir enctype -->
            <?php echo csrf_field(); ?> <!-- Esto genera el token CSRF necesario -->
            <h2>Registro de Usuario</h2>
            <?php if(session('success')): ?>
            <p class="exito"><?php echo e(session('success')); ?></p>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <p class="error"><?php echo e(session('error')); ?></p>
            <?php endif; ?>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
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
        
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
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

            <button type="submit">Registrar</button>
            </form>
        </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_curso\proyecto2\resources\views/auth/passwords/register.blade.php ENDPATH**/ ?>