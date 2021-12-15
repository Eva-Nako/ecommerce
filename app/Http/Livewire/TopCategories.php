<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TopCategories extends Component
{
    public $src;
   
    public function mount($src){
        $this->src=$src;
        
    }
    public function render()
    {
        return view('livewire.top-categories');
    }
}
