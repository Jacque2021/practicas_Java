<?php

namespace App\View\Components;
use App\Models\Tarea;     //SE IMPORTA PARA EL USO DE LA LINEA 32 DE ESTE MISMO ARCHIVO
use Carbon\Carbon;
use Illuminate\View\Component;

class TareaFormBody extends Component
{
    private $tarea;   //es privada
    /**
     * @param \App\Models\Tarea $tarea
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tarea=null)//$tarea=null puede ser nula la tarea y arriba indica de donde viene la variable, en donde dice @param \App\Models\Tarea $tarea 
    {
        //aqui empieza la edicion
        if(is_null($tarea)){
            $tarea=Tarea::make([
                'urgencia'=>0,
                'fecha_limite'=>Carbon::now(),
            ]);
        }
        $this->tarea=$tarea;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()//AQUI TAMBIEN SE EDITO
    {
        $params=
        [
            'tarea'=>$this->tarea,
            'urgencias'=> Tarea::URGENCIAS,
        ];
        return view('components.tarea-form-body', $params);
    }
}
