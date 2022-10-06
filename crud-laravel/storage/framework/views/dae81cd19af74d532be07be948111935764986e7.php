
<?php $__env->startSection('title',"Listado de tareas"); ?>
<?php $__env->startSection('contenido'); ?>
    <h1>Listado de tareas</h1>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tarea-index')->html();
} elseif ($_instance->childHasBeenRendered('GntVvqc')) {
    $componentId = $_instance->getRenderedChildComponentId('GntVvqc');
    $componentTag = $_instance->getRenderedChildComponentTagName('GntVvqc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GntVvqc');
} else {
    $response = \Livewire\Livewire::mount('tarea-index');
    $html = $response->html();
    $_instance->logRenderedChild('GntVvqc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tema.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud-laravel\resources\views/tarea/index.blade.php ENDPATH**/ ?>