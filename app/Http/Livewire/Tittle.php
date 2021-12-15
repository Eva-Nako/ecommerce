<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tittle extends Component
{
    public $text;
    public function mount($text){
     $this->text=$text;
    }
    
    public function render()
    {
        return view('livewire.tittle');
    }
}
