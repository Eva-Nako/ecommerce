<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Paragraph extends Component
{
    public $text;
    public function mount($text){
     $this->text=$text;
    }
    public function render()
    {
        return view('livewire.paragraph');
    }
}
