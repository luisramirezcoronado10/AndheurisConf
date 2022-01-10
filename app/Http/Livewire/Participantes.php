<?php

namespace App\Http\Livewire;

use App\Models\Participante;
use Livewire\Component;

class Participantes extends Component
{
    public $search;

    public function render()
    {
        $query = collect();

        if($this->search != ""){
            $query = Participante::where('dni','LIKE','%'.$this->search.'%')->orWhere('fullname','LIKE','%'.$this->search.'%')->get();
        }
        return view('livewire.participantes',[
            'participantes' => $query
        ]);
    }

    public function marcarAsistencia($id)
    {
        $participante = Participante::find($id);
        $participante->update(['asistencia'=>now()]);
    }
}
