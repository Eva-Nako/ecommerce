<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Discount extends Component
{
    public $src;
    public $name;
    public $text;
    public function mount($src, $text, $name){
        $this->src=$src;
        $this->text=$text;
        $this->name=$name;
    }
    public function render()
    {
        return view('livewire.discount');
    }
}
