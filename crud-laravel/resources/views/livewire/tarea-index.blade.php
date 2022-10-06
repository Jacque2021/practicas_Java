<div>
    {{-- The best athlete wants his opponent at his best. --}}
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
            @foreach ($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->nombre}}</td>
                    <td>{{ $tarea->estaFinalizada() }}</td>  <!-- Es un metodo que se creo en Http/Models/Tarea.php -->
                    <td>{{ $tarea->fecha_limite->format('H:i d/m/y') }}</td>
                    <td>{{ $tarea->urgencia() }}</td>  <!-- Es un metodo que se creo en Http/Models/Tarea.php -->
                    <td>{{ $tarea->descripcion }}</td>
                    <td>
                       <a href="{{ route('tarea.edit', $tarea) }}">Editar</a> 
                       <a href="{{ route('tarea.show', $tarea) }}">Ver</a> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
