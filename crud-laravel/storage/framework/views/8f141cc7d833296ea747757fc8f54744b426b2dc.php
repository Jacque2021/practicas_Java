
<?php $__env->startSection('title',"Tarea"); ?>

<?php $__env->startSection('contenido'); ?>
    <h3><?php echo e($tarea->nombre); ?></h3>
    <ul>
       <li>
            Finalizada: <strong><?php echo e($tarea->estaFinalizada()); ?></strong>
        </li> 
        <li>
            Urgencia: <strong><?php echo e($tarea->urgencia()); ?></strong>
        </li> 
        <li>
            Fecha limite: <strong><?php echo e($tarea->fecha_limite->format('H:i d / m / Y')); ?></strong>
        </li> 
    </ul>
    <p>
        <?php echo e($tarea->descripcion); ?>

    </p>
    <hr>
    <div class="row">
        <div class="col-sm-12 mb-2">
            <form action="<?php echo e(route('tarea.destroy', $tarea)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                    <button class="btn btn-danger btn-sm" type="submit">
                        Borrar
                    </button> 
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tema.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud-laravel\resources\views/tarea/show.blade.php ENDPATH**/ ?>