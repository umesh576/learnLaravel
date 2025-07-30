<?php

namespace App\Livewire;

use Livewire\Component;

class LivewireHook extends Component
{
    public $counter;
    public $name = "initial value";
    function mount(){
        $this->name = 'umesh';
    }
    function hydrate(){
        $this->counter++;
    }

    public function updateName($name){
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.livewire-hook');
    }
}