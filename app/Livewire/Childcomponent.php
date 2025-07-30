<?php

namespace App\Livewire;

use Livewire\Component;

class Childcomponent extends Component
{
    public $name ;
    function mount($name){
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.childcomponent');
    }
}