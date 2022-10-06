    <!-- Very little is needed to make a happy life. - Marcus Aurelius
    ESTO ES CORTADO DE CREATE.BLADE.PHP  -->
    @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">*Nombre de la tarea</label>
                <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="..." value="{{ old('nombre', $tarea->nombre) }}">
            </div>
           <div class="col-sm-4">
            <div class="form-check">
               <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input" value="1" @checked(old('finalizada', $tarea->finalizada))>
               <label for="InputFinalizada" class="form-check-label">Finalizada</label> 
            </div>
            </div> 
            <div class="col-sm-4">
                <label form="SelectUrgencia" class="form-label">*Urgencia</label>
                <select name="urgencia" id="SelectUrgencia" class="form-select">
                    @for($x = 0; $x < count($urgencias); $x++)
                        <option value="{{ $x }}" @selected(old('urgencia', $tarea->urgencia))>{{ $urgencias[$x] }}</option>
                    @endfor

                </select>

            </div>
            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-label">*Fecha limite</label>
                <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite', $tarea->fecha_limite->format('Y-m-d\TH:i') ) }}" >
            <!-- EXPLICACION DEL VALUE DE ARRIBA: SI ES NULA VA DEJARLE BACIO, SI NO LO ES, SE LE DA UN FORMATO, olvidalo, ya no-->
            </div>
            <div class="col-sm-12">
                <label for="TextAreaDescripcion" class="form-label">*Descripcion</label>
                <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control">{{ old('descripcion', $tarea->descripcion) }}</textarea>
            </div>
            <br>
           <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div> 
        </div>