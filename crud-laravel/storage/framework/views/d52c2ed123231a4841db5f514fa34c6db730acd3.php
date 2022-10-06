<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="bg-ligth">
    <div class="container shadow bg-write">
        <div class="row">
            <div class="col-sm-12">
                <h1>CRUD CON LARAVEL</h1>
            </div>
           <div class="col-sm-12">
            <a href="<?php echo e(route('tarea.create')); ?>" class="btn btn-link">Crear nueva tarea</a>
            <a href="<?php echo e(route('tarea.index')); ?>" class="btn btn-link">Listar tareas</a>
            </div> 
           <div class="col-sm-12">
                <?php echo $__env->yieldContent('contenido'); ?>
            </div> 
        </div>
    </div>
    <?php echo \Livewire\Livewire::styles(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\crud-laravel\resources\views/tema/app.blade.php ENDPATH**/ ?>