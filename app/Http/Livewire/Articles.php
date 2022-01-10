<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Articles extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.articles', [ 
           'articulos' => Article::where('title',$this->search)->orWhere('description',$this->search)->get()
        ]);
    }

    public function create()
    {
        Article::create([
            'title' => 'Titulo de Prueba',
            'description' => 'Descripcion de prueba'
        ]);
    }

    public function delete($id)
    {
        Article::find($id)->delete();
    }
}
