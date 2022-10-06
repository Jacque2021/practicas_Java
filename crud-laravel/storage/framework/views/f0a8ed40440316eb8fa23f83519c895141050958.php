<div>
    
    <div class="row">
        <div class="col-sm-9">
            <input type="text" name="" id="" placeholder="Buscar..." class="form-control" wire:model="busqueda">
        </div>
    </div>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Finalizada</th>
                <th>Fecha limite</th>
                <th>Urgencia</th>
                <th>Descripción</th>
                <th>Opciones</th> 
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($tarea->nombre); ?></td>
                    <td><?php echo e($tarea->estaFinalizada()); ?></td>  <!-- Es un metodo que se creo en Http/Models/Tarea.php -->
                    <td><?php echo e($tarea->fecha_limite->format('H:i d/m/y')); ?></td>
                    <td><?php echo e($tarea->urgencia()); ?></td>  <!-- Es un metodo que se creo en Http/Models/Tarea.php -->
                    <td><?php echo e($tarea->descripcion); ?></td>
                    <td>
                       <a href="<?php echo e(route('tarea.edit', $tarea)); ?>">Editar</a> 
                       <a href="<?php echo e(route('tarea.show', $tarea)); ?>">Ver</a> 
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\crud-laravel\resources\views/livewire/tarea-index.blade.php ENDPATH**/ ?>