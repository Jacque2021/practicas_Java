    <!-- Very little is needed to make a happy life. - Marcus Aurelius
    ESTO ES CORTADO DE CREATE.BLADE.PHP  -->
    <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">*Nombre de la tarea</label>
                <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="..." value="<?php echo e(old('nombre', $tarea->nombre)); ?>">
            </div>
           <div class="col-sm-4">
            <div class="form-check">
               <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input" value="1" <?php if(old('finalizada', $tarea->finalizada)): echo 'checked'; endif; ?>>
               <label for="InputFinalizada" class="form-check-label">Finalizada</label> 
            </div>
            </div> 
            <div class="col-sm-4">
                <label form="SelectUrgencia" class="form-label">*Urgencia</label>
                <select name="urgencia" id="SelectUrgencia" class="form-select">
                    <?php for($x = 0; $x < count($urgencias); $x++): ?>
                        <option value="<?php echo e($x); ?>" <?php if(old('urgencia', $tarea->urgencia)): echo 'selected'; endif; ?>><?php echo e($urgencias[$x]); ?></option>
                    <?php endfor; ?>

                </select>

            </div>
            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-label">*Fecha limite</label>
                <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="<?php echo e(old('fecha_limite', $tarea->fecha_limite->format('Y-m-d\TH:i') )); ?>" >
            <!-- EXPLICACION DEL VALUE DE ARRIBA: SI ES NULA VA DEJARLE BACIO, SI NO LO ES, SE LE DA UN FORMATO, olvidalo, ya no-->
            </div>
            <div class="col-sm-12">
                <label for="TextAreaDescripcion" class="form-label">*Descripcion</label>
                <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control"><?php echo e(old('descripcion', $tarea->descripcion)); ?></textarea>
            </div>
            <br>
           <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div> 
        </div><?php /**PATH C:\xampp\htdocs\crud-laravel\resources\views/components/tarea-form-body.blade.php ENDPATH**/ ?>