<?php

namespace App\Livewire;

use Livewire\Component;

class Userprofile extends Component
{
    public $message = "this is message from class and umesh";
    public function render()
    {
        $data = ['name'=>'umesh','email'=>'uj19343@gmail.com'];
        return view('livewire.userprofile',['data'=>$data]);
    }
}