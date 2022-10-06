
<?php $__env->startSection('title',"Editar tarea"); ?>

<?php $__env->startSection('contenido'); ?>
    <h3>Editar tarea <i><?php echo e($tarea->noombre); ?></i></h3>
    <form action="<?php echo e(route('tarea.update', $tarea)); ?>" method="POST">
        <?php echo method_field('put'); ?>
         <!-- AQUI MANDA LLAMAR EL COMPONENTE CREADO CON EL COMANDO-> php artisan make:component TareaFormBody
            y que esta  ubicado en resources/views/components/tarea-form-body.blade.php-->
        <?php if (isset($component)) { $__componentOriginal623a306051e647e79810a55fc63408f16482de8e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TareaFormBody::class, ['tarea' => $tarea] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tarea-form-body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\TareaFormBody::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal623a306051e647e79810a55fc63408f16482de8e)): ?>
<?php $component = $__componentOriginal623a306051e647e79810a55fc63408f16482de8e; ?>
<?php unset($__componentOriginal623a306051e647e79810a55fc63408f16482de8e); ?>
<?php endif; ?>
    </form>
    <!-- /resources/views/post/create.blade.php -->
    <!--COPIADO DE -> https://laravel.com/docs/9.x/validation
        APARTADO LLAMADÓ: Displaying The Validation Errors, PARA VALIDACION DE ERRORES -->
 
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
 
<!-- Create Post Form -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tema.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud-laravel\resources\views/tarea/edit.blade.php ENDPATH**/ ?>