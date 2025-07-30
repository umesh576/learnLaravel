<?php

namespace App\Livewire;

use Livewire\Component;

class Parentcomponent extends Component
{
    public  $name=['umesh','hari','shyam'];
    public function render()
    {
        return view('livewire.parentcomponent');
    }
}