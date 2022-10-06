@extends('tema.app')
@section('title',"Editar tarea")

@section('contenido')
    <h3>Editar tarea <i>{{ $tarea->noombre }}</i></h3>
    <form action="{{ route('tarea.update', $tarea) }}" method="POST">
        @method('put')
         <!-- AQUI MANDA LLAMAR EL COMPONENTE CREADO CON EL COMANDO-> php artisan make:component TareaFormBody
            y que esta  ubicado en resources/views/components/tarea-form-body.blade.php-->
        <x-tarea-form-body :tarea="$tarea"/>
    </form>
    <!-- /resources/views/post/create.blade.php -->
    <!--COPIADO DE -> https://laravel.com/docs/9.x/validation
        APARTADO LLAMADÓ: Displaying The Validation Errors, PARA VALIDACION DE ERRORES -->
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
@endsection