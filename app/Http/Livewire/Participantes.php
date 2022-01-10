<?php

namespace App\Http\Livewire;

use App\Models\Participante;
use Livewire\Component;

class Participantes extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.participantes',[
            'participantes' => Participante::where('dni',$this->search)->get()
        ]);
    }

    public function marcarAsistencia($id)
    {
        $participante = Participante::find($id);
        $participante->update(['asistencia'=>now()]);
    }
}
